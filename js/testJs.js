/*function addCardHtmlAfterClick(itemIwillAdd) {
    var itemINeedAddIt = ' <div class="card m-2">    ' +
        '        <div class="card-body border border-success">    ' +
        '            <div class="container">    ' +
        '                <div class="row">    ' +
        '                    <div class="col-1  rounded-circle">    ' +
        '    ' +
        '                        <img src="mariologo.png " style="width: 70px; height: 70px">    ' +
        '                    </div>    ' +
        '                    <div class="col-11 ">    ' +
        '                        <h4 class=" ">' + itemIwillAdd + '</h4>    ' +
        '                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been    ' +
        '                            the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley    ' +
        '                            of type and scrambled it to make a type specimen book.the industry\'s standard dummy text ever since the    ' +
        '                            1500s</span>    ' +
        '                    </div>    ' +
        '    ' +
        '                </div>    ' +
        '            </div>    ' +
        '        </div>    ' +
        '    </div>'
    return itemINeedAddIt;
}

var EditText = document.getElementById('exampleFormControlTextarea1')
var BtnAddNewItem = document.getElementById('BtnAddNewItem');
var containerCards = document.getElementById('containerCards');

*/



/*
var x={
    ageY:function () {

    }
}

console.log(x.ageY);
/*

BtnAddNewItem.addEventListener('click', function (e) {
    e.preventDefault();
    var valueOfEditText = EditText.value;

    var layoutBack = addCardHtmlAfterClick(valueOfEditText);

    containerCards.innerHTML =containerCards.innerHTML+ layoutBack;

});


*/


function Personal(fname,lname,address,ageage,gender) {

    this.firstName=fname;
    this.lastName=lname;
    this.address=address;
    this.ageage=ageage;
    this.gender=gender;


}


Personal.prototype.getFullname=function () {

    return this.firstName+" "+this.lastName;
}
Personal.prototype.getAge=function () {

    return this.ageage;
}


var x=new Personal('xxx','yyy','fff',50,'ppp');
console.log(x.getFullname());
console.log(x.getAge());
console.log(x.ageage);
console.log(x.lastName);
console.log(x.firstName);
console.log(x.address);
console.log(x.gender);
;