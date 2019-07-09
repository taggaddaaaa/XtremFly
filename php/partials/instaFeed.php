<div id="article">
	<div id="instagram-feed" class="insta"></div>
</div>
<script>
    // Personal token for Instagram feed.
    // Find in https://www.instagram.com/developer/ with Xtremfly qccount
    let token = "6770880204.6b9e408.27e9e546e46d4fd883f899f052114302";
    let count = 20;

    async function getData() {
        let response = await fetch(
            "https://api.instagram.com/v1/users/self/media/recent?access_token=" + token
        );
        return await response.json();
    }

    getData().then(data => {
        for (let x = 0; x < count; x++) {
            let template = `<div><a class="animation" target="_blank" href="${data.data[x].link}">
                        <img alt="insta pic from feed"
                             id="${data.data[x].id}"
                             title="${data.data[x].caption.text}"
                             src="${data.data[x].images.standard_resolution.url}"
                        ></a></div>`;
            // console.log(data.data[x]);
            document
                .getElementById("instagram-feed")
                .insertAdjacentHTML("beforeend", template);
        }
    });
</script>
