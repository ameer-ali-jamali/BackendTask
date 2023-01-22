$(document).ready(function () {
    // Closing the alert
    setTimeout(function () {
        $('#authAlert').alert('close');
        $('#alertDanger').alert('close');
    }, 4000);

    // Filter skills
    $("#searchSkills").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(".filterSkillsFromPosts").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    })

    // Filter Availabilty
    $("#filterPosts").click(function () {
        let getValue = $(".filterByCountry").val().toLowerCase();
        let getTime = $(".filterByTiming").val().toLowerCase();
        let payRate = $('.slider-input').val();
        var output = parseFloat(payRate.replace(/,/g, ''));
        $(".filterSkillsFromPosts").filter(function () {
            $(this).toggle($(this).text().indexOf(getTime) > -1)
        });
        $(".filterSkillsFromPosts").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(getValue) > -1)
        });
        $(".filterSkillsFromPosts").filter(function () {
            $(this).toggle($(this).number().indexOf(output) > -1)
        });
    });




});

