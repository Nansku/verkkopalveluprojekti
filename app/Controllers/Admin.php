<?php namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class Admin extends BaseController{

    private $CategoryModel=null;
    private $ProductModel=null;

    function __construct()
    {
      $this->CategoryModel = new CategoryModel();
      $this->ProductModel = new ProductModel();
    }

    public function index()
	{
    $data['category'] = $this->CategoryModel->getCategory();
    $data['title'] = 'Categories';
    echo view('template/header_admin.php');
    echo view('admin/category.php',$data);
    }
    

  /**
   * Tallentaa tuoteryhmän.
   * 
   * @param int $tuoteryhma_id = Tuoteryhmän id, mikäli tuoteryhmää muokataan.
   */
  public function save($categorynum = null) {
    // Näytetään otsikko sen mukaan, ollaanko lisäämässä vai muokkaamassa.
    if ($categorynum != null || $this->request->getPost('categorynum')!=null) {
      $data['title'] = "Muokkaa tuoteryhmää";
    }
    else {
      $data['title'] = "Lisää tuoteryhmä";
    }

    // Jos post-metodi, yritetään tallentaa.
    if ($this->request->getMethod() === 'post') {
      if (!$this->validate([
        'categoryname' => 'required|max_length[255]'
      ])) {  
        // Validointi ei mene läpi, palautetaan lomake näkyviin.
        $data['categorynum'] = $this->request->getPost('categorynum');
        $data['categoryname'] = $this->request->getPost('categoryname');
        $this->showForm($data);
      }
      else {
        // Tallennetaan.
        $save['categorynum'] = $this->request->getPost('categorynum');
        $save['categoryname'] = $this->request->getPost('categoryname');
        $this->CategoryModel->save($save);
        return redirect('admin/index');
      }
    }
    else {
      // Näytetään lomake.
      $data['categorynum'] = '';
      $data['categoryname'] = '';
      // Mikäli tuoteryhmä on asetettu, ollaan muokkaamassa ja haetaan tietokannasta
      // tiedot lomakkeelle.
      if ($categorynum != null) {
        $category = $this->CategoryModel->categoryGet($categorynum);
        $data['categorynum'] = $category['categorynum'];
        $data['categoryname'] = $category['categoryname'];  
      }
      $this->showForm($data);
    }
  }
  
  /**
   * Poistaa tuoteryhmän.
   * 
   * @param int $id Poistettavan tuoteryhmän id.
   */
  public function deleteCategory($id) {
    // Poistetaan ensin tuotteet tuoteryhmän alta.
    $this->ProductModel->deleteByCategory($id);
    // Poistetaan tuoteryhmä.
    $this->CategoryModel->deleteCategory($id);
    return redirect ('admin/index');
  }

  /**
  * Näyttää tuoteryhmän lisäys/muokkauslomakkeen.
  *
  * @param Array $data Lomakkeelle välitettävät muuttujat taulukossa.
  */
  private function showForm($data) {
    echo view('template/header_admin.php');
    echo view('admin/category_form.php',$data);

  }

}