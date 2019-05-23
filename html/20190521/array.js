var array = ['A', 'B', 'C'];
console.log(array);
console.log(array[0]);
for (var index = 0; index < array.length; index = index + 1) {
    document.getElementById('nguoi-so-' + (index + 1)).innerHTML = array[index];
}
//var index = 0;
//document.getElementById('nguoi-so-' + (index + 1).innerHTML) = array[index];
//index = index + 1;
//document.getElementById('nguoi-so-' + (index + 1).innerHTML) = array[index];
//index = index + 1;
//document.getElementById('nguoi-so-' + (index + 1).innerHTML) = array[index];
var doiTuongNam = {
    name: "Nam",
    age: 21,
    "gioi-tinh": 'male',
    maried: false,
    "name-of-dogs": [
        'phoc', 'cun'
    ],
    tiengkeu: function () {
        //  console.log('ec ec');
        return {
            name: 'heo'
        }
    }
};
console.log(doiTuongNam.name);
console.log(doiTuongNam["gioi-tinh"]);
console.log(doiTuongNam["name-of-dogs"]);
console.log(doiTuongNam.tiengkeu);
doiTuongNam.maried;
doiTuongNam.tiengkeu();
console.log(doiTuongNam.tiengkeu().name);
doiTuongNam.tiengkeu();


document.getElementById('1').innerHTML = doiTuongNam["name-of-dogs"][0];
document.getElementById('1').innerHTML = doiTuongNam["name-of-dogs"][1];


var arrayNameOfDogs = doiTuongNam["name-of-dogs"];
console.log(arrayNameOfDogs);

for (var i = 0; i < arrayNameOfDogs.length; i++) {
    console.log(i); // tăng biến giá trị của i
    var heading = document.createElement('h1');
    var contentOfHeading = document.createTextNode(arrayNameOfDogs[i]);
    heading.appendChild(contentOfHeading);
    document.body.appendChild(heading);
}