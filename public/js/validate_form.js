function validateForm() {
    let name = document.forms['order']['customername'];
    let address = document.forms['order']['address'];
    let postalnum = document.forms['order']['postalnum'];
    let city = document.forms['order']['city'];
    let email = document.forms['order']['email'];

    if (email.value == "") {
        //window.alert("Email must be filled.");
        document.getElementById('alert5').style.display = "block";

        if (city.value == "") {
            //window.alert("City must be filled.");
            document.getElementById('alert4').style.display = "block";

            if (postalnum.value == "") {
                //window.alert("Postal number must be filled.");
                document.getElementById('alert3').style.display = "block";

                if (address.value == "") {
                    //window.alert("Address must be filled.");
                    document.getElementById('alert2').style.display = "block";

                    if (name.value == "") {
                        //alert("Name must be filled.");
                        document.getElementById('alert1').style.display = "block";
                        return false;
                    }

                    return false;

                }

                return false;
            }

            return false;

        }
        return false;

    }
    if (document.getElementById('postiCheck').checked || document.getElementById('matkahuoltoCheck').checked || document.getElementById('dhlCheck').checked) {
        
        return true;
    } else {
        alert("Choose a delivery option.");
        return false;
    }

}