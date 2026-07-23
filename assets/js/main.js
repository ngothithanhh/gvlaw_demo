document.addEventListener("DOMContentLoaded", () => {

    const input = document.querySelector("#live-search");
    const results = document.querySelector("#search-results");

    // console.log("Live Search Loaded");

    if (!input || !results) return;

    let timeout;

    input.addEventListener("keyup", function () {

        clearTimeout(timeout);

        const keyword = this.value.trim();

        if (keyword.length < 2) {

            results.innerHTML = "";
            results.style.display = "none";

            return;

        }

        timeout = setTimeout(() => {

            fetch(gvlaw_ajax.ajax_url, {

                method: "POST",

                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },

                body: new URLSearchParams({

                    action: "gvlaw_live_search",

                    keyword: keyword,

                    nonce: gvlaw_ajax.nonce

                })

            })

            .then(response => response.text())

            .then(html => {

                results.innerHTML = html;

                results.style.display = "block";

            });

        }, 300);

    });

    document.addEventListener("click", function (e) {

        if (!e.target.closest(".search-wrapper")) {

            results.style.display = "none";

        }

    });

    // document.querySelector("#live-search").addEventListener("input", function () {
    //     console.log(this.value);
    // });

   

});