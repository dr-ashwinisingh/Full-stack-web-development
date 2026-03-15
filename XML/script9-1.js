function loadData()
{
    fetch("data9.json")
    .then(function(response){
        return response.json();
    })
    .then(function(data){

        var output = "<h3>Student List</h3>";
        output += "<ul>";

        for(var i = 0; i < data.students.length; i++)
        {
            output += "<li>" +
            "ID: " + data.students[i].id +
            " | Name: " + data.students[i].name +
            " | Course: " + data.students[i].course +
            "</li>";
        }

        output += "</ul>";

        document.getElementById("result").innerHTML = output;
    });
}