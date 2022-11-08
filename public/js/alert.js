function askconfirm(event) {

    const confirmdelete = confirm(
        "Are u sure u ewant delete it?"
    );
    if (!confirmdelete) {
        event.preventDefault(); // evento che inibisce submit del form
    }


}
