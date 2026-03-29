document.addEventListener("DOMContentLoaded", function () {

    if (typeof act_ajax !== "undefined") {

        if (!sessionStorage.getItem("viewed_" + act_ajax.post_id)) {

            sessionStorage.setItem("viewed_" + act_ajax.post_id, "true");

            fetch(act_ajax.ajax_url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: new URLSearchParams({
                    action: "act_track_post_view",
                    post_id: act_ajax.post_id,
                    nonce: act_ajax.nonce
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.querySelector(".act-post-views").textContent =
                        "Views: " + data.data.views;
                }
            });
        }
    }

});