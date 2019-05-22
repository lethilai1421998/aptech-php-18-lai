var data = {
    users: [{
            id: 10,
            name: "Ethyl Medhurst",
            email: "noah.hand@example.org",
            password: "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
            created_at: "2019-03-26 04:55:04",
            updated_at: "2019-03-26 04:55:04"
        },
        {
            id: 9,
            name: "Eula Lebsack PhD",
            email: "schroeder.sylvan@example.org",
            password: "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
            created_at: "2019-03-26 04:55:03",
            updated_at: "2019-03-26 04:55:03"
        },
        {
            id: 8,
            name: "Mrs. Kathlyn Parisian DDS",
            email: "ggrimes@example.net",
            password: "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
            created_at: "2019-03-26 04:55:03",
            updated_at: "2019-03-26 04:55:03"
        }
    ]
};
// tạo một function thay cho document.createElement(" ")
function Create(nameOfElement) {
    return document.createElement(nameOfElement);
}
//tạo các element
var table = Create("table");
var thead = Create("thead");
var tbody = Create("tbody");

var styleAttribute1 = document.createAttribute("style");
styleAttribute1.value = "color: red";
thead.setAttributeNode(styleAttribute1);

//them thead và tbody và thẻ table
table.appendChild(thead);
table.appendChild(tbody);

var trow = Create("tr");
thead.appendChild(trow);
// tạo một mảng tạm thời
var array1 = ["Id", "Name", "Email"];
//lấy giá trị trang mảng cho vào th trong thẻ tr
for (var i = 0; i < array1.length; i++) {
    var th = Create("th");
    var text = document.createTextNode(array1[i]);
    th.appendChild(text);
    trow.appendChild(th);
};
// tới phần tbody làm tương tự
var trowBody1 = Create("tr");
tbody.appendChild(trowBody1);
// // tạo một mảng tạm thời chứa id,name,email.
var array2 = [data.users[0].id, data.users[0].name, data.users[0].email];
for (var i = 0; i < array2.length; i++) {
    var td = Create("td");
    var text = document.createTextNode(array2[i]);
    td.appendChild(text);
    trowBody1.appendChild(td);
};
for (var i = 0; i < data.users.length; i++) {
    var trowBody = Create("tr");
    tbody.appendChild(trowBody);
    var array = [data.users[i].id, data.users[i].name, data.users[i].email];
    for (var j = 0; j < array.length; j++) {
        var td = Create("td");
        var text = document.createTextNode(array[j]);
        td.appendChild(text);
        trowBody.appendChild(td);
    }
}

document.body.appendChild(table);