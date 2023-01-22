$(document).ready(function () {
    setTimeout(function () {
        // Closing the alert
        $('#authAlert').alert('close');
        $('#alertDanger').alert('close');
    }, 4000);

    // Fillter skills
    $("#searchSkills").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(".fillterSkillsFromPosts").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // Fillter Availabilty
    // var hourly = $('#hourly').val = "hourly"
    // var partTime = $('#hourly').val = "partTime"
    // var fullTime = $('#hourly').val = "fullTime"
    var payRate = $('#payRateHourly').val();
    $('#filterPosts').click(function () {
        alert(payRate);
    })
    // var value = $(this).val().toLowerCase();
    // $(".fillterSkillsFromPosts").filter(function () {
    //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    // });



})

