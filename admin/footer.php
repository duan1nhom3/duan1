<script src="../view/doc/js/jquery-3.2.1.min.js"></script>
  <script src="../view/doc/js/popper.min.js"></script>
  <script src="../view/doc/js/bootstrap.min.js"></script>
  <script src="../view/doc/js/main.js"></script>
  <script src="../view/doc/js/plugins/pace.min.js"></script>
  <script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function () {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
    });

  </script>

<script src="view/js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="view/js/popper.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <!--===============================================================================================-->
  <script src="view/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="view/js/main.js"></script>
  <!--===============================================================================================-->
  <script src="view/js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="view/js/plugins/chart.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript">
    var data = {
      labels: ["Th??ng 1", "Th??ng 2", "Th??ng 3", "Th??ng 4", "Th??ng 5", "Th??ng 6"],
      datasets: [{
        label: "D??? li???u ?????u ti??n",
        fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
        strokeColor: "rgb(255, 212, 59)",
        pointColor: "rgb(255, 212, 59)",
        pointStrokeColor: "rgb(255, 212, 59)",
        pointHighlightFill: "rgb(255, 212, 59)",
        pointHighlightStroke: "rgb(255, 212, 59)",
        data: [20, 59, 90, 51, 56, 100]
      },
      {
        label: "D??? li???u k??? ti???p",
        fillColor: "rgba(9, 109, 239, 0.651)  ",
        pointColor: "rgb(9, 109, 239)",
        strokeColor: "rgb(9, 109, 239)",
        pointStrokeColor: "rgb(9, 109, 239)",
        pointHighlightFill: "rgb(9, 109, 239)",
        pointHighlightStroke: "rgb(9, 109, 239)",
        data: [48, 48, 49, 39, 86, 10]
      }
      ]
    };
    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxb = $("#barChartDemo").get(0).getContext("2d");
    var barChart = new Chart(ctxb).Bar(data);
  </script>
  <script type="text/javascript">
    //Th???i Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Ch??? Nh???t";
      weekday[1] = "Th??? Hai";
      weekday[2] = "Th??? Ba";
      weekday[3] = "Th??? T??";
      weekday[4] = "Th??? N??m";
      weekday[5] = "Th??? S??u";
      weekday[6] = "Th??? B???y";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " gi??? " + m + " ph??t " + s + " gi??y";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
  </script>
</body>

</html>