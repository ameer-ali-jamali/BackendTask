$(document).ready(function () {
    // Closing the alert
    setTimeout(function () {
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
    $("#filterPosts").click(function () {
        var getValue = $(".filtterByCountry").val().toLowerCase();
        var vals = "part Time"
        $(".fillterSkillsFromPosts").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(getValue) > -1)
        });
    })




})

