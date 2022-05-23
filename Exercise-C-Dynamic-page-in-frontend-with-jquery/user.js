console.log('sarah');

$.get("http://localhost/mentoring/api/user.php?id=2", function (data) {
    // $(".result").html(data);
    console.log(data);

    $("#user-id").html(data.id);
    $("#user-forename").html(data.forename);
    $("#user-lastname").html(data.lastname);
    $("#user-age").html(data.age);
    $("#user-adress").html(data.adress);

});