 // Show innerText of the #test element
    console.log(document.getElementById("test").innerText);

    // Add alert on clicking any child inside .new
    const tags = document.querySelector(".new").children;
    for (let i = 0; i < tags.length; i++) {
      tags[i].addEventListener("click", function (event) {
        alert(event.target.innerText);
      });
    }

    // Show prompt when clicking .title element
    document.querySelectorAll(".title").forEach((abc) => {
      abc.onclick = function () {
        this.innerHTML=`
        <h3>
            <a href ="#"> This is JS </a>
            <p >This is assigned Dynamically </p>
        </h3>

        `;

        this.style.color = "yellow";
        this.style.backgroundColor ="#000000";
        this.style.borderRadius ="10px";
        this.style.padding ="20px";

      };
    });

    