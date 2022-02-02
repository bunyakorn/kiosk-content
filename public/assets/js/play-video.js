document.addEventListener("DOMContentLoaded", function (event) {
  var videoSource = new Array();
  var j;
  var m = 1;
  var hdItem = document.getElementById("hiddenContent").value;
  var Dir = "assets/multimedia/";
  for (j = 0; j < hdItem; j++) {
    m = j + 1;
    videoSource[j] =
      Dir + "" + document.getElementById("hiddenVideo" + m).value;
  }

  //console.log(videoSource);

  var i = 0; //define i
  var videCount = videoSource.length;

  function videoPlay(videoNum) {
    document
      .getElementById("myVideo")
      .setAttribute("src", videoSource[videoNum]);
    var hdVL = document.getElementById("hiddenContent").value;
    var videoItem = document.getElementById("myVideo");
    if (hdVL >= 1) {
      videoItem.load();
    } else {
      videoItem.pause();
    }
  }

  document.getElementById("myVideo").addEventListener("ended", myHandle, false);
  videoPlay(0); // set play video

  function myHandle() {
    i++;
    if (i == videCount - 1) {
      i = 0;
      videoPlay(i);
    } else {
      videoPlay(i);
    }
  }
});
