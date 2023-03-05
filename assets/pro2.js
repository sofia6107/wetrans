document.querySelectorAll("#dlBtn").forEach(function (n) {
                return n.addEventListener("click", function () {
                    $("#modalbox").style.display = "block";
                });
});