function validate()
{
    //Validates the input from the customer before submitting
    //Quantities cannot be blank or negative (zero is fine)
    //Username must be in the form of an email address (name@domain.com)
    //password field cannot be blank
    //We do not have a database to check against, so the password can be anything
    //They must pick a shipping option -- already done
    var username = document.getElementById("username").value;
    var length = 0;
    for(var i = 0; i < username.length; i++)
    {
        if(username[i] != '@')
        {
            length++;
        }
    }
    if(length == username.length)
    {
        //send an alert
        alert("Not a valid username; must include '@'.");
    }
    if(document.getElementById("password").value == "")
    {
        alert("Fill out password");
    }
    if(document.getElementById("item1").value < 0 || document.getElementById("item1").value == "")
    {
        alert("Invalid item 1");
    }
    if(document.getElementById("item2").value < 0 || document.getElementById("item2").value == "")
    {
        alert("Invalid item 2");
    }
    if(document.getElementById("item3").value < 0 || document.getElementById("item3").value == "")
    {
        alert("Invalid item 3");
    }
}