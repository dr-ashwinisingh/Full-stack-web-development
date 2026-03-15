function loadData()
{
    // Step 1: Create XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Step 2: Configure the request
    xhr.open("GET", "data9.json", true);

    // Step 3: When response is received
    xhr.onreadystatechange = function()
    {
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            // Step 4: Convert JSON string to JavaScript object
            var data = JSON.parse(xhr.responseText);

            var output = "<h3>Student List</h3>";
            output += "<ul>";

            // Step 5: Loop through JSON data
            for(var i=0; i<data.students.length; i++)
            {
                output += "<li>" +
                "ID: " + data.students[i].id +
                " | Name: " + data.students[i].name +
                " | Course: " + data.students[i].course +
                "</li>";
            }

            output += "</ul>";

            // Step 6: Display data on webpage
            document.getElementById("result").innerHTML = output;
        }
    };

    // Step 7: Send request to server
    xhr.send();
}