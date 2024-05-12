$(document).ready(() => {
    $(document).on('click', '.remove-resource', function (e) {
        e.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                let url = $(this).attr('href');
                removeResource(url)
            }
        });
    })

    function removeResource(url) {
        $.ajax({
            url: url,
            type: 'DELETE',
            success: function () {
                Swal.fire({
                    title: "Deleted successfully.",
                    text: "You can't revert this!",
                    icon: "success",
                    timer: 3000,
                }).then(() => {
                    window.location.reload();
                });
            },
            error: function (err) {
                console.log(err);
            }
        })
    }
}) 