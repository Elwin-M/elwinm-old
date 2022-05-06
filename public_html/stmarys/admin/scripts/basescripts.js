function cancel_b(ID, Page) {
    console.log("cancel pressed by: " + ID + " " + Page);

    switch (Page) {
        case 1:
            console.log("birthday case");
            document.getElementById("base_name" + ID).style.display = "table-cell";
            document.getElementById("base_month" + ID).style.display = "table-cell";
            document.getElementById("base_day" + ID).style.display = "table-cell";

            document.getElementById("hidden_name" + ID).style.display = "none";
            document.getElementById("hidden_month" + ID).style.display = "none";
            document.getElementById("hidden_day" + ID).style.display = "none";

            document.getElementById("delete_button" + ID).style.display = "table-cell";
            document.getElementById("edit_button" + ID).style.display = "table-cell";

            document.getElementById("cancel_button" + ID).style.display = "none";
            document.getElementById("edit_confirm" + ID).style.display = "none";
            document.getElementById("delete_confirm" + ID).style.display = "none";
            break;

        case 2:
            console.log("anniversary case");
            document.getElementById("base_wife" + ID).style.display = "table-cell";
            document.getElementById("base_husband" + ID).style.display = "table-cell";
            document.getElementById("base_month" + ID).style.display = "table-cell";
            document.getElementById("base_day" + ID).style.display = "table-cell";

            document.getElementById("hidden_wife" + ID).style.display = "none";
            document.getElementById("hidden_husband" + ID).style.display = "none";
            document.getElementById("hidden_month" + ID).style.display = "none";
            document.getElementById("hidden_day" + ID).style.display = "none";

            document.getElementById("delete_button" + ID).style.display = "table-cell";
            document.getElementById("edit_button" + ID).style.display = "table-cell";

            document.getElementById("cancel_button" + ID).style.display = "none";
            document.getElementById("edit_confirm" + ID).style.display = "none";
            document.getElementById("delete_confirm" + ID).style.display = "none";
            break;

        case 3:
            console.log("mass case");
            document.getElementById("base_name" + ID).style.display = "table-cell";
            document.getElementById("base_month" + ID).style.display = "table-cell";
            document.getElementById("base_day" + ID).style.display = "table-cell";

            document.getElementById("hidden_name" + ID).style.display = "none";
            document.getElementById("hidden_month" + ID).style.display = "none";
            document.getElementById("hidden_day" + ID).style.display = "none";

            document.getElementById("delete_button" + ID).style.display = "table-cell";
            document.getElementById("edit_button" + ID).style.display = "table-cell";

            document.getElementById("cancel_button" + ID).style.display = "none";
            document.getElementById("edit_confirm" + ID).style.display = "none";
            document.getElementById("delete_confirm" + ID).style.display = "none";
            break;

        case 4:
            console.log("news case");
            document.getElementById("base_name" + ID).style.display = "table-cell";

            document.getElementById("hidden_name" + ID).style.display = "none";

            document.getElementById("edit_button" + ID).style.display = "table-cell";

            document.getElementById("cancel_button" + ID).style.display = "none";
            document.getElementById("edit_confirm" + ID).style.display = "none";
            break;

        case 5:
            console.log("images case");
            document.getElementById("base_name" + ID).style.display = "table-cell";
            document.getElementById("base_image" + ID).style.display = "table-cell";
            document.getElementById("base_stat" + ID).style.display = "table-cell";

            document.getElementById("hidden_name" + ID).style.display = "none";
            document.getElementById("hidden_image" + ID).style.display = "none";
            document.getElementById("hidden_stat" + ID).style.display = "none";

            document.getElementById("delete_button" + ID).style.display = "table-cell";
            document.getElementById("edit_button" + ID).style.display = "table-cell";

            document.getElementById("cancel_button" + ID).style.display = "none";
            document.getElementById("edit_confirm" + ID).style.display = "none";
            document.getElementById("delete_confirm" + ID).style.display = "none";
            break;



    }
}

function delete_b(ID, Page) {
    console.log("delete pressed by: " + ID + " " + Page);

    document.getElementById("delete_button" + ID).style.display = "none";
    document.getElementById("edit_button" + ID).style.display = "none";

    document.getElementById("cancel_button" + ID).style.display = "table-cell";
    document.getElementById("delete_confirm" + ID).style.display = "table-cell";


}

function edit_b(ID, Page) {
    console.log("edit pressed by: " + ID + " " + Page);

    switch (Page) {
        case 1:
            console.log("birthday case");
            document.getElementById("base_name" + ID).style.display = "none";
            document.getElementById("base_month" + ID).style.display = "none";
            document.getElementById("base_day" + ID).style.display = "none";

            document.getElementById("hidden_name" + ID).style.display = "table-cell";
            document.getElementById("hidden_month" + ID).style.display = "table-cell";
            document.getElementById("hidden_day" + ID).style.display = "table-cell";

            document.getElementById("delete_button" + ID).style.display = "none";
            document.getElementById("edit_button" + ID).style.display = "none";

            document.getElementById("cancel_button" + ID).style.display = "table-cell";
            document.getElementById("edit_confirm" + ID).style.display = "table-cell";
            break;

        case 2:
            console.log("anniversary case");
            document.getElementById("base_wife" + ID).style.display = "none";
            document.getElementById("base_husband" + ID).style.display = "none";
            document.getElementById("base_month" + ID).style.display = "none";
            document.getElementById("base_day" + ID).style.display = "none";

            document.getElementById("hidden_wife" + ID).style.display = "table-cell";
            document.getElementById("hidden_husband" + ID).style.display = "table-cell";
            document.getElementById("hidden_month" + ID).style.display = "table-cell";
            document.getElementById("hidden_day" + ID).style.display = "table-cell";

            document.getElementById("delete_button" + ID).style.display = "none";
            document.getElementById("edit_button" + ID).style.display = "none";

            document.getElementById("cancel_button" + ID).style.display = "table-cell";
            document.getElementById("edit_confirm" + ID).style.display = "table-cell";
            break;

        case 3:
            console.log("mass case");
            document.getElementById("base_name" + ID).style.display = "none";
            document.getElementById("base_month" + ID).style.display = "none";
            document.getElementById("base_day" + ID).style.display = "none";

            document.getElementById("hidden_name" + ID).style.display = "table-cell";
            document.getElementById("hidden_month" + ID).style.display = "table-cell";
            document.getElementById("hidden_day" + ID).style.display = "table-cell";

            document.getElementById("delete_button" + ID).style.display = "none";
            document.getElementById("edit_button" + ID).style.display = "none";

            document.getElementById("cancel_button" + ID).style.display = "table-cell";
            document.getElementById("edit_confirm" + ID).style.display = "table-cell";
            break;

        case 4:
            console.log("news case");
            document.getElementById("base_name" + ID).style.display = "none";

            document.getElementById("hidden_name" + ID).style.display = "table-cell";

            document.getElementById("edit_button" + ID).style.display = "none";

            document.getElementById("cancel_button" + ID).style.display = "table-cell";
            document.getElementById("edit_confirm" + ID).style.display = "table-cell";
            break;

        case 5:
            console.log("images case");

            document.getElementById("base_name" + ID).style.display = "none";
            document.getElementById("base_image" + ID).style.display = "none";
            document.getElementById("base_stat" + ID).style.display = "none";

            document.getElementById("hidden_name" + ID).style.display = "table-cell";
            document.getElementById("hidden_image" + ID).style.display = "table-cell";
            document.getElementById("hidden_stat" + ID).style.display = "table-cell";

            document.getElementById("delete_button" + ID).style.display = "none";
            document.getElementById("edit_button" + ID).style.display = "none";

            document.getElementById("cancel_button" + ID).style.display = "table-cell";
            document.getElementById("edit_confirm" + ID).style.display = "table-cell";

            break;

    }



}