<?php namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class Product extends BaseController
{
  private $CategoryModel=null;
  private $ProductModel=null;

  function __construct()
  {
    $this->CategoryModel = new CategoryModel();
    $this->ProductModel = new ProductModel();
  }

  /**
   * Näyttää tuotteet (tuoteryhmän mukaan). 
   */
	public function index($category_id = null)
	{
    // Jos tuoteryhmää ei välitetä parametrina, haetaan 1. tuoteryhmä tietokannasta ja näytetään
    // sen tuotteet.
    if ($category_id === null) {
      $category_id = $this->CategoryModel->getFirstCategory();
    }

    // Haetaan ja aseteatan lomakkeella näytettävä tiedot muuttujiin.
    $data['category_id'] = $category_id;
    $data['categories'] = $this->CategoryModel->getCategory();
    $data['products'] = $this->ProductModel->getWithCategory($category_id);
    $data['title'] = 'Tuotteet';
    echo view('template/header_admin.php');
    echo view('admin/product.php',$data);

  }

  /**
   * Vaihtaa post-parametrina saadun tuoteryhmän mukaiset tuotteet näkyviin. Tätä metodia
   * käytetään, kun käyttöliittymässä vaihdetaan tuoteryhmää pudotuslistassa. 
   */
  public function changeCategory() {
    $category_id = $this->request->getPost('category_id');
    $this->index($category_id);
  }

  /**
   * Tallentaa tuotteen.
   * 
   * @param int $tuoteryhma_id Tuoteryhmän id, jonka alle tuote lisätään.
   * @param int $tuote Tuotteen id, mikäli ollaan muokkaamassa tuotteen tietoja.
   */
  public function save($category_id,$product_id = null) {
    // Asetetaan otsikko sen mukaan, ollaanko lisäämässä vai muokkaamassa tuotteen tietoja.
    if ($product_id != null || $this->request->getPost('id')!=null) {
      $data['title'] = "Muokkaa tuotetta";
    }
    else {
      $data['title'] = "Lisää tuote";
    }

    // Tuoteryhmän id kulkee mukana lomakkeella aina, koska tuote pitää aina tallentaa jonkin 
    // tuoteryhmän alle.
    $data['category_id'] = $category_id;

    // Jos post-metodi, yritetään tallentaa.
    if ($this->request->getMethod() === 'post') {
      if (!$this->validate([
        'productname' => 'required|max_length[50]',
        'price' => 'required'
      ])) {  
        // Validointi ei mene läpi, palautetaan lomake näkyviin.
        $data['category_id'] = $category_id;
        $data['id'] = $this->request->getPost('id');
        $data['productname'] = $this->request->getPost('productname');
        $data['description'] = $this->request->getPost('description');
        $data['price'] = $this->request->getPost('price');
        $data['cost'] = $this->request->getPost('cost');
        $data['picture'] = $this->request->getPost('picture');
        $this->showForm($data);
      }
      else {  // Tallennetaan.

        // Tallennetaan kuva ja luodaan thumbnail-samalla. Kuva ladataan, jos pystytään.
        // Tuotteen tiedot tallennetaan, vaikka kuvan lataus epäonnistuisi.
        $path = ROOTPATH . '/public/img/';
        $file= $this->request->getFile('picture');
        if ($file->isValid()) {
          
          $file->move($path ,$file->getName());

          \Config\Services::image()
          ->withFile($path . $file->getName())
          ->fit(400, 250, 'center')
          ->save($path . $file->getName());
          $save['picture'] = $file->getName();

          
        }

        $path = ROOTPATH . '/public/img/large/';
        $file= $this->request->getFile('large_picture');
        if ($file->isValid()) {
          
          $file->move($path ,$file->getName());

          \Config\Services::image()
          ->withFile($path . $file->getName())
          ->fit(600, 375, 'center')
          ->save($path . $file->getName());
          $save['large_picture'] = $file->getName();
        }


        //Tallennetaan tuote tietokantaan.
        $save['category_id'] = $category_id;
        $save['id'] = $this->request->getPost('id');
        $save['productname'] = $this->request->getPost('productname');
        $save['description'] = $this->request->getPost('description');
        $save['price'] = $this->request->getPost('price');
        $save['cost'] = $this->request->getPost('cost');
        $this->ProductModel->save($save);
        return redirect()->to(site_url('/product/index/' . $category_id));
      }      
    }
    else { // Näytetään lomake.
      $data['id'] = '';
      $data['productname'] = '';
      $data['description'] = '';  
      $data['price'] = 0;
      $data['cost'] = 0;
      $data['picture'] = '';

      // Mikäli tuote on asetettu, ollaan muokkaamassa ja haetaan tietokannasta
      // tiedot lomakkeelle.
      if ($product_id != null) {
        $product = $this->ProductModel->getProduct($product_id);
        $data['id'] = $product['id'];
        $data['productname'] = $product['productname'];  
        $data['description'] = $product['description'];  
        $data['price'] = $product['price'];
        $data['cost'] = $product['cost'];
        $data['picture'] = $product['picture'];
      }
      $this->showForm($data);
    }
  }

  /**
   * Poistaa tuotteen.
   * 
   * @param int $id Poistettavan tuotteen id.
   */
  public function deleteProduct($id) {


    $this->ProductModel->deleteProduct($id);
    return redirect ('product/index');
  }

  /**
  * Näyttää tuotteen lisäys/muokkauslomakkeen.
  *
  * @param Array $data Lomakkeelle välitettävät muuttujat taulukossa.
  */
  private function showForm($data) {
    echo view('template/header_admin.php');
    echo view('admin/product_form.php',$data);

  }
}