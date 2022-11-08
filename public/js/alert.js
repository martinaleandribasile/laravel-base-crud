function askconfirm(event) {

    const confirmdelete = confirm(
        "Are u sure u want to delete it?"
    );
    if (!confirmdelete) {
        event.preventDefault(); // evento che inibisce submit del form
    }


}
