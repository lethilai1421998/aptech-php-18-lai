var data;

function loadDoc() {
    var xhttp = new XMLHttpRequest(); //class
    xhttp.onreadystatechange = function () {
        //console.log(this.readyState);
        if (this.readyState == 4 && this.status == 200) {
            data = (JSON.parse(this.responseText));

            //document.getElementById("demo").innerHTML =
            //  JSON.parse(this.responseText);


            function clickme() {
                function create(nameOfElement) {
                    return document.createElement(nameOfElement);
                }

                var table = create("table");

                var thead = create("thead");
                table.appendChild(thead);
                var tr = create("tr");
                thead.appendChild(tr);

                var array = ["ID", "Name"];
                for (var i = 0; i < array.length; i++) {
                    var th = create("th");
                    var id = document.createTextNode(array[i]);
                    th.appendChild(id);
                    tr.appendChild(th);
                }

                var tbody = create("tbody");
                table.appendChild(tbody);

                document.body.appendChild(table);
                var str = data.users;
                for (var i = 0; i < data.users.length; i++) {
                    var tr = create("tr");
                    tbody.appendChild(tr);
                    var array = [data.users[i].id, data.users[i].name];
                    console.log(array);
                    for (var j = 0; j < array.length; j++) {
                        console.log(j);
                        var td = create("td");
                        var textNode = document.createTextNode(array[j]);
                        td.appendChild(textNode);
                        tr.appendChild(td);
                    }
                }
            }
            clickme();
        }
    };
    console.log("sfh");
    //xhttp.open("GET", "data.json", true);
    xhttp.open("GET", "https://namcoi.com/projects/users-crud-laravel/public/api/users", true);
    xhttp.send();

}