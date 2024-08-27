<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="" />
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  
  <title>Justice</title>
  <style>
    #screenShare {
      /* margin-top: 20px; */
      width: 80%;
    }

    audio {
      display: none;
    }
    /* @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500;600;700&display=swap"); */

/* .btn {
  padding: 7px;
  border: none;
  border-radius: 2px;
} */
body {
  background-color: #212032;
  overflow: scroll;
}
.text-white {
  color: white;
}
.text-black {
  color: black;
}
.text-primary {
  color: #fa4c3b;
}
.text-secondary {
  color: #1e1d1c;
}
.primary {
  background-color: #fa4c3b;
}
.secondary {
  background-color: #1e1d1c;
}

.main-bg {
  background-color: #1e1d1c;
}
.video-frame {
  width: 300px;
  height: 300px;
  /* height: 650px; */
  /* height: 100%; */
  border-radius: 10px;
  /* transform: rotate("90"); */
  object-fit: cover;
  margin: 10px;
  background: #000;
  border: 1px solid lightslategrey;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}
/* *BODY  PAGE */
body {
  width: 100%;
  height: 100%;
  overflow: scroll;
}

/* *JOINPAGE */
#joinPage,
.home-page {
  position: absolute;
  background-color: #212032;
  width: 100%;
  height: 100%;
  z-index: 999;
  overflow: hidden;
  padding: 0px;
  margin: 0px;
  top: 0px;
}

/* Chat-wrapper*/
.chat-wrapper {
  position: absolute;
  right: 0px;
  top: 0px;
}

.hide {
  display: none;
}
.class-control {
  position: relative;
}

input[type="text"] {
  background-color: #212032;
  color: aliceblue;
  height: 60px;
  width: 450px;
  border: 1px solid gray;

  border-radius: 5px;
  margin-top: -15px;
}
input[type="text"]:hover {
  background-color: #212032;
  color: aliceblue;
  border: 1px solid grey;
}
.flex-container {
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.video-view {
  position: relative;
  width: 650px;
  height: 350px;
}

.video-view .video {
  position: absolute;
  /* width: 100%;
  height: 100%; */
  object-fit: cover;
  background-color: #000;
}
.video-view .video-content {
  position: absolute;
  /* width: 100%;
  height: 100%; */
  object-fit: cover;
  margin-top: 280px;
  margin-left: 280px;
  color: aliceblue;
  /* background-color: #ccc; */
}

.btn-content {
  height: 53px;
  margin-top: -20px;
  width: 50px;
  background-color: #e0e0e0;
  padding: 15px;
  border-radius: 25px;
  margin-left: 30px;
}
.mute-btn-content {
  height: 50px;
  margin-top: -20px;
  width: 50px;
  background-color: #d3382d;
  padding: 15px;
  border-radius: 25px;
  margin-left: 30px;
}
.bi {
  margin-top: -20px;
}
#micButton:hover {
  border: none;
}

#camButton:hover {
  border: none;
}

.grid-page {
  background-color: #212032;
}
.vertical-line {
  margin-left: 30px;
  /* border-right: 1px solid white; */
}
.dropdown-item {
  color: white;
  background-color: #212032;
}
.dropdown-item:hover {
  color: white;
  background-color: #212032;
  cursor: pointer;
}
.copyContent {
  color: black;
  background-color: rgb(136, 132, 132);
  border-radius: 5px;
  position: absolute;
  visibility: hidden;
  width: 100px;
}
#btnCopy:hover .copyContent {
  visibility: visible;
}
.ms-1 {
  margin-left: 5px;
}
#video-frame-container {
  height: 400px;
  width: 90%;
  /* border: 1px solid yellow; */
  border-radius: 10px;
}
#videoContainer {
  height: 100vh;
  width: 100vw;
  /* border: 1px solid #d3382d; */
  /* overflow: scroll; */
  display: flex;
  flex-wrap: wrap;
  /* flex-direction: column; */
}
#videoContainer > div {
  border: "1px solid red ";
  /* max-width: 33.33%; */
  height: 100%;
  flex: 1 1 33.3333%;
}

.participant-wrapper {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0px;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.7s;
  padding-top: 60px;
  border: 1px solid lightslategrey;
  border-radius: 15px;
  background-color: #212032;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}

.closebtn {
  font-size: xx-large;
  color: #e0e0e0;
  position: fixed;
  right: 0;
  top: 0;
  margin-right: 7px;
  cursor: pointer;
  visibility: hidden;
}
#totalParticipants {
  /* font-size: xx-large; */
  color: #e0e0e0;
  position: fixed;
  top: 0;
  margin-top: 25px;
  margin-left: 7px;
  cursor: pointer;
  visibility: hidden;
}

#videoScreenShare {
  flex-grow: 1;
  /* position: absolute; */
  border-radius: 10px;
}
.chat-wrapper {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0px;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.7s;
  padding-top: 60px;
  border: 1px solid lightslategrey;
  border-radius: 15px;
  background-color: #212032;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}
#chatHeading {
  /* font-size: xx-large; */
  color: #e0e0e0;
  position: fixed;
  top: 0;
  margin-top: 25px;
  margin-left: 7px;
  cursor: pointer;
  visibility: hidden;
}
#txtChat {
  position: fixed;
  bottom: 0;
}
#btnSend {
  position: fixed;
  bottom: 0;
  right: 0;
  margin-bottom: 10px;
  margin-right: 10px;
  height: fit-content;
  display: none;
}

.select-class {
  background-color: #212032;
  color: aliceblue;
  border: 1px solid gray;
  border-radius: 5px;
  padding: 6px;
  width:210px
}
  </style>
</head>

<body>
  <!--join page container start-->
  <div id="joinPage" class="main-bg" style="display: flex; margin-left: -15px">
    <div style="margin: auto; display: flex; width: 80%;">
      <!--join screen left grid start-->
      <div class="join-left" style="
            margin-right: 30px;
            align-items: center; justify-content: center;
          ">
        <div class="video-view">
          <video class="video" id="joinCam" style="
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 10px;
                transform: rotate('90');
                object-fit: cover;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19),
                  0 6px 6px rgba(0, 0, 0, 0.23);
              "></video>
          <div class="input-group mb-3 video-content">
            <button style="border-radius: 20px; height: 50px; width: 50px; background-color: red;" id="camButton"
              onclick="toggleWebCam()">
              <i class="bi bi-camera-video-fill" style="color: black; font-size: 21px; display: none" id="onCamera"></i>
              <i class="bi bi-camera-video-off-fill" style="color: black; font-size: 21px; " id="offCamera"></i>
            </button>
            <button style="
                  border-radius: 20px;
                  height: 50px;
                  width: 50px;
                  margin-left: 5px;
                  background-color: red;
                " id="micButton" onclick="toggleMic()">
              <i class="bi bi-mic-mute-fill" style="color: black; font-size: 21px;" id="muteMic"></i>
              <i class="bi bi-mic-fill" style="color: black; font-size: 21px; display: none" id="unmuteMic"></i>
            </button>
          </div>
        </div>
        <div style="margin-top: 12px;display: grid; gap: 6px; grid-template-columns: auto auto auto; ">
          <div>
            <label style="color: white;">Camera</label>
            <select style="column-span: 3;" class="select-class" id="cameraDeviceDropDown"
              onchange="enableCam()"></select>
          </div>
          <div>
            <label style="color: white;">Microphone</label>
            <select style="column-span: 3;" class="select-class" id="microphoneDeviceDropDown"></select>
          </div>
          <div>
            <label style="color: white;">Speakers</label>
            <select style="column-span: 3;" class="select-class" id="playBackDeviceDropDown"></select>
          </div>
        </div>
      </div>
      <!--join screen right grid start-->
      <div class="join-right"
        style="margin-left:48px; width: 400px;  display: flex; align-items: center; justify-content: center; flex-direction: column;">


        <!-- <div class="flex"> -->
          <div class="flex-container col-auto">
            <center>
              <button class="btn btn-primary" style="border-radius: 5px" id="meetingJoinButton"
                onclick="joinMeeting(true)">
                Create Meeting
              </button>
            </center>
          </div>
          <div class="flex-container">
            <center>
              <br />
              <center style="color: grey">OR</center>
            </center>
          </div>
          <div class="flex-container" style="margin-top: 25px">
            <center>
              <div class="col-auto" style="width: 500px; margin-left: 70px">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text" style="
                          background-color: #212032;
                          padding: 12px;
                          margin-top: -15px;
                        ">
                      <img src="./assets/icons/svg-path.svg" height="25px" width="25px" />
                    </div>
                  </div>
                  <input type="text" class="form-control" id="joinMeetingId" placeholder="Enter Meeting Code" />
                  <div class="input-group-append">
                    <button class="btn btn-primary" style="
                          border-radius: 5px;
                          margin-left: 7px;
                          margin-top: -5px;
                          height: 50px;
                          height: 40px;
                        " id="meetingJoinButton" onclick="joinMeeting(false)">
                      Join Meeting
                    </button>
                  </div>
                </div>
              </div>
            </center>
          </div>
        <!-- </div> -->
      </div>
      <!--join screen right grid end-->
    </div>
  </div>

  <div class="grid-page flex-container" id="gridPpage" style="display: none; position: relative">
    <div class="row" style="height: 70px; width: 100%; border-bottom: 1px solid grey">
      <div class="col-3 d-flex justify-content-start" style="margin-top: 19px">
        <input type="text" style="background-color: #212032" class="form-control navbar-brand" id="meetingid"
          readonly />

        <button id="btnCopy" type="button" class="btn btn-outline-light" style="height: fit-content; position: relative"
          onclick="copyMeetingCode()">
          <span class="material-icons"> content_copy </span>
          <div class="copyContent">Copy Meeting Code</div>
        </button>
      </div>

      <div class="col-9" style="margin-top: 13px; position: static; align-content: right">
        <div class="d-flex justify-content-end">
          <button type="button" id="btnStartRecording" class="btn btn-outline-light">
            <span class="material-icons"> radio_button_checked </span>
          </button>
          <button type="button" style="display: none" id="btnStopRecording" class="btn btn-light">
            <span class="material-icons"> radio_button_checked </span>
          </button>
          <button type="button" id="btnRaiseHand" class="btn btn-outline-light ms-1">
            <span class="material-icons"> front_hand </span>
          </button>
          <span class="vertical-line"></span>

          <!-- main page toggle mic-->
          <div class="btn-group" id="main-pg-mute-mic" style="display: inline-block">
            <button type="button" class="btn btn-outline-light dropdown-toggle ms-1" aria-haspopup="true"
              aria-expanded="false">
              <span class="material-icons"> mic_off </span>
            </button>
          </div>
          <div class="btn-group" id="main-pg-unmute-mic" style="display: none">
            <button type="button" class="btn btn-outline-light ms-1" aria-haspopup="true" aria-expanded="false">
              <span class="material-icons"> mic </span>
            </button>
            
          </div>
          <!--main page toggle web-cam-->
          <div class="btn-group" id="main-pg-cam-off" style="display: inline-block">
            <button type="button" class="btn btn-outline-light ms-1" aria-haspopup="true" aria-expanded="false">
              <span class="material-icons"> videocam_off</span>
            </button>
          </div>
          <div class="btn-group" id="main-pg-cam-on" style="display: none">
            <button type="button" class="btn btn-outline-light ms-1" aria-haspopup="true" aria-expanded="false"
              id="videoCamOn">
              <span class="material-icons"> videocam </span>
            </button>
          </div>
          <!--screen share-->
          <button type="button" id="btnScreenShare" class="btn btn-outline-light ms-1">
            <span class="material-icons"> screen_share </span>
          </button>
          <span class="vertical-line"></span>
          <!--participants-->
          <button type="button" class="btn btn-outline-light ms-1" onclick="openParticipantWrapper()">
            <span class="material-icons"> people </span>
          </button>
          <!--chat-->
          <button type="button" class="btn btn-outline-light ms-1" onclick="openChatWrapper()">
            <span class="material-icons"> chat </span>
          </button>
          <span class="vertical-line"></span>
          <!--call end-->
          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle ms-1" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="material-icons"> call_end </span>
            </button>
            <div class="dropdown-menu" style="
                  background-color: #212032;
                  color: white;
                  margin-left: -80px;
                ">
              <a class="dropdown-item" id="endCall">End Call</a>
              <a class="dropdown-item" id="leaveCall">Leave Meeting</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <video id="videoScreenShare"></video>

    <div class="row" id="videoContainer"></div>
  </div>

  <!--raise hand pop-up-->
  <div id="contentRaiseHand" class="alert alert-info col-2" style="
        left: 10;
        bottom: 0;
        position: absolute;
        height: 60px;
        display: none;
      " role="alert"></div>

  <!--participant wrapper-->
  <div class="participant-wrapper" id="participants">
    <div class="participant-wrapper-header text-light">
      <span class="closebtn" id="ParticipantsCloseBtn" onclick="closeParticipantWrapper()">&times;</span>
      <h5 id="totalParticipants"></h5>
    </div>
    <hr class="border-light rounded 3" />
    <div id="participantsList" class="participant-wrapper-content text-light"></div>
  </div>

  <!--chat wrapper-->
  <div class="chat-wrapper" id="chatModule">
    <div class="chat-wrapper-header text-light">
      <span class="closebtn" id="chatCloseBtn" onclick="closeChatWrapper()">&times;</span>
      <h5 id="chatHeading">Let's Chat!</h5>
    </div>
    <hr class="border-light rounded 3" />
    <div id="chatArea" class="chat-wrapper-content text-light" style="overflow-y: scroll"></div>
    <div class="message-box input-group mb-2">
      <input type="text" id="txtChat"="form-control" placeholder="Message..." />
      <div id="btnSend" class="input-group-append">
        <button class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>

 
  <script src="https://sdk.videosdk.live/js-sdk/0.0.80/videosdk.js"></script>
  <script src="config.js"></script>
  <script>
    const API_BASE_URL = "https://api.videosdk.live";

// Declaring variables
let videoContainer = document.getElementById("videoContainer");
let micButton = document.getElementById("micButton");
let camButton = document.getElementById("camButton");
let copy_meeting_id = document.getElementById("meetingid");
let contentRaiseHand = document.getElementById("contentRaiseHand");
let btnScreenShare = document.getElementById("btnScreenShare");
let videoScreenShare = document.getElementById("videoScreenShare");
let btnRaiseHand = document.getElementById("btnRaiseHand");
// let btnStopPresenting = document.getElementById("btnStopPresenting");
let btnSend = document.getElementById("btnSend");
let participantsList = document.getElementById("participantsList");
let videoCamOff = document.getElementById("main-pg-cam-off");
let videoCamOn = document.getElementById("main-pg-cam-on");

let micOn = document.getElementById("main-pg-unmute-mic");
let micOff = document.getElementById("main-pg-mute-mic");

//recording
let btnStartRecording = document.getElementById("btnStartRecording");
let btnStopRecording = document.getElementById("btnStopRecording");

//videoPlayback DIV
let videoPlayback = document.getElementById("videoPlayback");


// For PreCall
const cameraDeviceDropDown = document.getElementById('cameraDeviceDropDown');
const microphoneDeviceDropDown = document.getElementById('microphoneDeviceDropDown');
const playBackDeviceDropDown = document.getElementById('playBackDeviceDropDown');


let meeting = "";
// Local participants
let localParticipant;
let localParticipantAudio;
let createMeetingFlag = 0;
let joinMeetingFlag = 0;
let token = "";
let micEnable = false;
let webCamEnable = false;
let totalParticipants = 0;
let remoteParticipantId = "";
let participants = [];
// join page
let joinPageWebcam = document.getElementById("joinCam");
let meetingCode = "";
let screenShareOn = false;
let joinPageVideoStream = null;
let cameraPermissionAllowed = true;
let microphonePermissionAllowed = true;
let deviceChangeEventListener;

window.addEventListener("load", async function () {
  /*

  const audioPermission = await window.VideoSDK.requestPermission(
    window.VideoSDK.Constants.permission.AUDIO,
  );

  console.log(
    "request Audio Permissions",
    audioPermission.get(window.VideoSDK.Constants.permission.AUDIO)
  );


  const videoPermission = await window.VideoSDK.requestPermission(
    window.VideoSDK.Constants.permission.VIDEO,
  );

  console.log(
    "request Video Permissions",
    videoPermission.get(window.VideoSDK.Constants.permission.VIDEO)
  );

  const audiovideoPermission = await window.VideoSDK.requestPermission(
    window.VideoSDK.Constants.permission.AUDIO_AND_VIDEO,
  );

  console.log(
    "request Audio and Video Permissions",
    audiovideoPermission.get(window.VideoSDK.Constants.permission.AUDIO),
    audiovideoPermission.get(window.VideoSDK.Constants.permission.VIDEO)
  );

  */

  /*

  try {
    const checkAudioPermission = await window.VideoSDK.checkPermissions(
      window.VideoSDK.Constants.permission.AUDIO,
    );
    console.log(
      "Check Audio Permissions",
      checkAudioPermission.get(window.VideoSDK.Constants.permission.AUDIO)
    );
  } catch (e) {
    console.error(e.message);
  }

  try {
    const checkVideoPermission = await window.VideoSDK.checkPermissions(
      window.VideoSDK.Constants.permission.VIDEO,
    );
    console.log(
      "Check Video Permissions",
      checkVideoPermission.get(window.VideoSDK.Constants.permission.VIDEO)
    );
  } catch (e) {
    console.error(e.message);
  }

  try {
    const checkAudioVideoPermission = await window.VideoSDK.checkPermissions(
      window.VideoSDK.Constants.permission.AUDIO_AND_VIDEO,
    );
    console.log(
      "Check Audio Video Permissions",
      checkAudioVideoPermission.get(window.VideoSDK.Constants.permission.VIDEO),
      checkAudioVideoPermission.get(window.VideoSDK.Constants.permission.AUDIO)
    );
  } catch (e) {
    console.error(e.message);
  }

  */

  const requestPermission = await window.VideoSDK.requestPermission(
    window.VideoSDK.Constants.permission.AUDIO_AND_VIDEO,
  );

  console.log(
    "request Audio and Video Permissions",
    requestPermission.get(window.VideoSDK.Constants.permission.AUDIO),
    requestPermission.get(window.VideoSDK.Constants.permission.VIDEO)
  );

  await updateDevices();
  await enableCam();
  await enableMic();

  await window.VideoSDK.getNetworkStats({ timeoutDuration: 120000 })
    .then((result) => {
      console.log("Network Stats : ", result);
    })
    .catch((error) => {
      console.log("Error in Network Stats : ", error);
    });

  deviceChangeEventListener = async (devices) => { // 
    await updateDevices();
    await enableCam();
  }
  window.VideoSDK.on("device-changed", deviceChangeEventListener);
});

async function updateDevices() {
  try {
    const checkAudioVideoPermission = await window.VideoSDK.checkPermissions();

    cameraPermissionAllowed = checkAudioVideoPermission.get(window.VideoSDK.Constants.permission.VIDEO);
    microphonePermissionAllowed = checkAudioVideoPermission.get(window.VideoSDK.Constants.permission.AUDIO);

    if (cameraPermissionAllowed) {
      const cameras = await window.VideoSDK.getCameras();
      cameraDeviceDropDown.innerHTML = "";
      cameras.forEach(item => {
        const option = document.createElement('option');
        option.value = item.deviceId;
        option.text = item.label;
        cameraDeviceDropDown.appendChild(option);
      });

    } else {
      const option = document.createElement('option');
      option.value = "Permission needed";
      option.text = "Permission needed";
      cameraDeviceDropDown.appendChild(option);

      cameraDeviceDropDown.disabled = true;
      cameraDeviceDropDown.setAttribute("style", "cursor:not-allowed")
    }

    if (microphonePermissionAllowed) {
      const microphones = await window.VideoSDK.getMicrophones();
      const playBackDevices = await window.VideoSDK.getPlaybackDevices();
      microphoneDeviceDropDown.innerHTML = "";
      playBackDeviceDropDown.innerHTML = "";

      microphones.forEach(item => {
        const option = document.createElement('option');
        option.value = item.deviceId;
        option.text = item.label;
        microphoneDeviceDropDown.appendChild(option);
      });

      playBackDevices.forEach(item => {
        const option = document.createElement('option');
        option.value = item.deviceId;
        option.text = item.label;
        playBackDeviceDropDown.appendChild(option);
      });

    } else {
      const microphoneDeviceOption = document.createElement('option');
      microphoneDeviceOption.value = "Permission needed";
      microphoneDeviceOption.text = "Permission needed";
      microphoneDeviceDropDown.appendChild(microphoneDeviceOption);

      const playBackDeviceOption = document.createElement('option');
      playBackDeviceOption.value = "Permission needed";
      playBackDeviceOption.text = "Permission needed";
      playBackDeviceDropDown.appendChild(playBackDeviceOption);

      microphoneDeviceDropDown.disabled = true;
      playBackDeviceDropDown.disabled = true;
      microphoneDeviceDropDown.setAttribute("style", "cursor:not-allowed")
      playBackDeviceDropDown.setAttribute("style", "cursor:not-allowed")
    }
  } catch (Ex) {
    console.log("Error in check permission" + Ex);
  }
}

const setAudioOutputDevice = (deviceId) => {
  const audioTags = document.getElementsByTagName("audio");
  for (let i = 0; i < audioTags.length; i++) {
    audioTags.item(i).setSinkId(deviceId);
  }
};


async function tokenGeneration() {
  if (TOKEN != "") {
    token = TOKEN;
    console.log(token);
  } else if (AUTH_URL != "") {
    token = await window
      .fetch(AUTH_URL + "/generateJWTToken")
      .then(async (response) => {
        const { token } = await response.json();
        console.log(token);
        return token;
      })
      .catch(async (e) => {
        console.log(await e);
        return;
      });
  } else if (AUTH_URL == "" && TOKEN == "") {
    alert("Set Your configuration details first ");
    window.location.href = "/";
    // window.location.reload();
  } else {
    alert("Check Your configuration once ");
    window.location.href = "/";
    // window.location.reload();
  }
}

async function validateMeeting(meetingId, joinMeetingName) {
  if (token != "") {
    const url = `${API_BASE_URL}/v2/rooms/validate/${meetingId}`;

    const options = {
      method: "GET",
      headers: { Authorization: token },
    };

    const result = await fetch(url, options)
      .then((response) => response.json()) //result will have meeting id
      .catch((error) => {
        console.error("error", error);
        alert("Invalid Meeting Id");
        window.location.href = "/";
        return;
      });
    if (result.roomId === meetingId) {
      document.getElementById("meetingid").value = meetingId;
      document.getElementById("joinPage").style.display = "none";
      document.getElementById("gridPpage").style.display = "flex";
      toggleControls();
      startMeeting(token, meetingId, joinMeetingName);
    }
  } else {
    await fetch(
      AUTH_URL + "/validatemeeting/" + meetingId,
      {
        method: "POST",
        headers: {
          Authorization: token,
          "Content-Type": "application/json",
        },
      }
    )
      .then(async (result) => {
        const { meetingId } = await result.json();
        console.log(meetingId);
        if (meetingId == undefined) {
          return alert("Invalid Meeting ID ");
        } else {
          document.getElementById("meetingid").value = meetingId;
          document.getElementById("joinPage").style.display = "none";
          document.getElementById("gridPpage").style.display = "flex";
          toggleControls();
          startMeeting(token, meetingId, joinMeetingName);
        }
      })
      .catch(async (e) => {
        alert("Meeting ID Invalid", await e);
        window.location.href = "/";
        return;
      });
  }
}

function addParticipantToList({ id, displayName }) {
  let participantTemplate = document.createElement("div");
  participantTemplate.className = "row";
  participantTemplate.style.padding = "4px";
  participantTemplate.style.marginTop = "1px";
  participantTemplate.style.marginLeft = "7px";
  participantTemplate.style.marginRight = "7px";
  participantTemplate.style.borderRadius = "3px";
  participantTemplate.style.border = "1px solid rgb(61, 60, 78)";
  participantTemplate.style.backgroundColor = "rgb(0, 0, 0)";

  //icon
  let colIcon = document.createElement("div");
  colIcon.className = "col-2";
  colIcon.innerHTML = "Icon";
  participantTemplate.appendChild(colIcon);

  //name
  let content = document.createElement("div");
  colIcon.className = "col-3";
  colIcon.innerHTML = `${displayName}`;
  participantTemplate.appendChild(content);
  // participants.push({ id, displayName });

  console.log(participants);

  participantsList.appendChild(participantTemplate);
  participantsList.appendChild(document.createElement("br"));
}

function createLocalParticipant() {
  totalParticipants++;
  localParticipant = createVideoElement(meeting.localParticipant.id);
  localParticipantAudio = createAudioElement(meeting.localParticipant.id);
  // console.log("localPartcipant.id : ", localParticipant.className);
  // console.log("meeting.localPartcipant.id : ", meeting.localParticipant.id);
  videoContainer.appendChild(localParticipant);
}

async function startMeeting(token, meetingId, name) {
  if (joinPageVideoStream !== null) {
    const tracks = joinPageVideoStream.getTracks();
    tracks.forEach((track) => {
      track.stop();
    });
    joinPageVideoStream = null;
    joinPageWebcam.srcObject = null;
  }

  window.VideoSDK.off("device-changed", deviceChangeEventListener);

  // Meeting config
  window.VideoSDK.config(token);
  let customVideoTrack, customAudioTrack;

  if (webCamEnable) {
    customVideoTrack = await window.VideoSDK.createCameraVideoTrack({
      cameraId: cameraDeviceDropDown.value ? cameraDeviceDropDown.value : undefined,
      optimizationMode: "motion",
      multiStream: false,
    });
  }

  if (micEnable) {
    customAudioTrack = await window.VideoSDK.createMicrophoneAudioTrack({
      microphoneId: microphoneDeviceDropDown.value ? microphoneDeviceDropDown.value : undefined,
      encoderConfig: "high_quality",
      noiseConfig: {
        noiseSuppresion: true,
        echoCancellation: true,
        autoGainControl: true,
      },
    });
  }

  // Meeting Init
  meeting = window.VideoSDK.initMeeting({
    meetingId: meetingId, // required
    name: name, // required
    micEnabled: micEnable, // optional, default: true
    webcamEnabled: webCamEnable, // optional, default: true
    maxResolution: "hd", // optional, default: "hd"
    customCameraVideoTrack: customVideoTrack,
    customMicrophoneAudioTrack: customAudioTrack,
  });

  participants = meeting.participants;
  console.log("meeting obj : ", meeting);
  // Meeting Join
  meeting.join();

  //create Local Participant
  createLocalParticipant();

  //add yourself in participant list
  if (totalParticipants != 0)
    addParticipantToList({
      id: meeting.localParticipant.id,
      displayName: "You",
    });

  // Setting local participant stream
  meeting.localParticipant.on("stream-enabled", (stream) => {
    setTrack(
      stream,
      localParticipantAudio,
      meeting.localParticipant,
      (isLocal = true)
    );
    console.log("webcam used : ", meeting.selectedCameraDevice);
    console.log("microphone used : ", meeting.selectedMicrophoneDevice);
  });

  meeting.localParticipant.on("stream-disabled", (stream) => {
    if (stream.kind == "video") {
      videoCamOn.style.display = "none";
      videoCamOff.style.display = "inline-block";
    }
    if (stream.kind == "audio") {
      micOn.style.display = "none";
      micOff.style.display = "inline-block";
    }
    console.log("webcam used : ", meeting.selectedCameraDevice);
    console.log("microphone used : ", meeting.selectedMicrophoneDevice);
  });

  meeting.on("meeting-joined", () => {
    meeting.pubSub.subscribe("CHAT", (data) => {
      let { message, senderId, senderName, timestamp } = data;
      const chatBox = document.getElementById("chatArea");
      const chatTemplate = `
          <div style="margin-bottom: 10px; ${meeting.localParticipant.id == senderId && "text-align : right"
        }">
            <span style="font-size:12px;">${senderName}</span>
            <div style="margin-top:5px">
              <span style="background:${meeting.localParticipant.id == senderId ? "grey" : "crimson"
        };color:white;padding:5px;border-radius:8px">${message}<span>
            </div>
          </div>
          `;
      chatBox.insertAdjacentHTML("beforeend", chatTemplate);
    });

  });

  meeting.on("meeting-left", () => {
    window.location.reload();
    document.getElementById("join-page").style.display = "flex";
  });

  // Other participants
  meeting.on("participant-joined", (participant) => {
    totalParticipants++;
    let videoElement = createVideoElement(participant.id);
    console.log("Video Element Created");
    let resizeObserver = new ResizeObserver(() => {
      participant.setViewPort(
        videoElement.offsetWidth,
        videoElement.offsetHeight
      );
    });
    resizeObserver.observe(videoElement);
    let audioElement = createAudioElement(participant.id);
    remoteParticipantId = participant.id;

    participant.on("stream-enabled", (stream) => {
      setTrack(stream, audioElement, participant, (isLocal = false));
    });
    videoContainer.appendChild(videoElement);
    console.log("Video Element Appended");
    videoContainer.appendChild(audioElement);
    addParticipantToList(participant);
    setAudioOutputDevice(playBackDeviceDropDown.value);
  });

  // participants left
  meeting.on("participant-left", (participant) => {
    totalParticipants--;
    let vElement = document.getElementById(`v-${participant.id}`);
    vElement.parentNode.removeChild(vElement);

    let aElement = document.getElementById(`a-${participant.id}`);
    aElement.parentNode.removeChild(aElement);
    //remove it from participant list participantId;
    document.getElementById(`p-${participant.id}`).remove();
  });

  //recording events
  meeting.on("recording-started", () => {
    console.log("RECORDING STARTED EVENT");
    btnStartRecording.style.display = "none";
    btnStopRecording.style.display = "inline-block";
  });
  meeting.on("recording-stopped", () => {
    console.log("RECORDING STOPPED EVENT");
    btnStartRecording.style.display = "inline-block";
    btnStopRecording.style.display = "none";
  });

  meeting.on("presenter-changed", (presenterId) => {
    if (presenterId) {
      console.log(presenterId);
      //videoScreenShare.style.display = "inline-block";
    } else {
      console.log(presenterId);
      videoScreenShare.removeAttribute("src");
      videoScreenShare.pause();
      videoScreenShare.load();
      videoScreenShare.style.display = "none";

      btnScreenShare.style.color = "white";
      screenShareOn = false;
      console.log(`screen share on : ${screenShareOn}`);
    }
  });

  //add DOM Events
  addDomEvents();
}

// joinMeeting();
async function joinMeeting(newMeeting) {
  // get Token
  tokenGeneration();

  let joinMeetingName = "JSSDK";
  let meetingId = document.getElementById("joinMeetingId").value || "";
  if (!meetingId && !newMeeting) {
    return alert("Please Provide a meetingId");
  }

  if (!newMeeting) {
    validateMeeting(meetingId, joinMeetingName);
  }

  //create New Meeting
  //get new meeting if new meeting requested;
  if (newMeeting && TOKEN != "") {
    const url = `${API_BASE_URL}/v2/rooms`;
    const options = {
      method: "POST",
      headers: { Authorization: token, "Content-Type": "application/json" },
    };

    const { roomId } = await fetch(url, options)
      .then((response) => response.json())
      .catch((error) => alert("error", error));

    if (roomId) {
      document.getElementById("meetingid").value = roomId;
      document.getElementById("joinPage").style.display = "none";
      document.getElementById("gridPpage").style.display = "flex";
      toggleControls();
      startMeeting(token, roomId, joinMeetingName);
    }
  } else if (newMeeting && TOKEN == "") {
    const options = {
      method: "POST",
      headers: {
        Authorization: token,
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ token }),
    };

    meetingId = await fetch(AUTH_URL + "/createMeeting", options).then(
      async (result) => {
        console.log("result of create meeting : ", result);
        const { meetingId } = await result.json();
        console.log("NEW MEETING meetingId", meetingId);
        return meetingId;
      }
    );
    if (meetingId) {
      document.getElementById("meetingid").value = meetingId;
      document.getElementById("joinPage").style.display = "none";
      document.getElementById("gridPpage").style.display = "flex";
      toggleControls();
      startMeeting(token, meetingId, joinMeetingName);
    }
  }
}

// creating video element
function createVideoElement(pId) {
  let division;
  division = document.createElement("div");
  division.setAttribute("id", "video-frame-container");
  division.className = `v-${pId}`;
  let videoElement = document.createElement("video");
  videoElement.classList.add("video-frame");
  videoElement.setAttribute("id", `v-${pId}`);
  videoElement.setAttribute("playsinline", true);
  //videoElement.setAttribute('height', '300');
  videoElement.setAttribute("width", "300");
  division.appendChild(videoElement);
  return videoElement;
}

// creating audio element
function createAudioElement(pId) {
  let audioElement = document.createElement("audio");
  audioElement.setAttribute("autoPlay", "false");
  audioElement.setAttribute("playsInline", "true");
  audioElement.setAttribute("controls", "false");
  audioElement.setAttribute("id", `a-${pId}`);
  return audioElement;
}

//setting up tracks

function setTrack(stream, audioElement, participant, isLocal) {
  if (stream.kind == "video") {
    console.log("setTrack called...");
    if (isLocal) {
      videoCamOff.style.display = "none";
      videoCamOn.style.display = "inline-block";
    }
    const mediaStream = new MediaStream();
    mediaStream.addTrack(stream.track);
    let videoElm = document.getElementById(`v-${participant.id}`);
    videoElm.srcObject = mediaStream;
    videoElm
      .play()
      .catch((error) =>
        console.error("videoElem.current.play() failed", error)
      );
    participant.setViewPort(videoElm.offsetWidth, videoElm.offsetHeight);
  }
  if (stream.kind == "audio") {
    if (isLocal) {
      micOff.style.display = "none";
      micOn.style.display = "inline-block";
      return;
    }
    const mediaStream = new MediaStream();
    mediaStream.addTrack(stream.track);
    audioElement.srcObject = mediaStream;
    audioElement
      .play()
      .catch((error) => console.error("audioElem.play() failed", error));
  }
  if (stream.kind == "share" && !isLocal) {
    screenShareOn = true;
    const mediaStream = new MediaStream();
    mediaStream.addTrack(stream.track);
    videoScreenShare.srcObject = mediaStream;
    videoScreenShare
      .play()
      .catch((error) =>
        console.error("videoElem.current.play() failed", error)
      );
    videoScreenShare.style.display = "inline-block";
    btnScreenShare.style.color = "grey";
  }
}

//add button events once meeting is created
function addDomEvents() {
  // mic button event listener
  micOn.addEventListener("click", () => {
    console.log("Mic-on pressed");
    meeting.muteMic();
  });

  micOff.addEventListener("click", async () => {
    console.log("Mic-f pressed");
    if (microphonePermissionAllowed) {
      meeting.unmuteMic();
    } else {
      console.log("Audio : Permission not granted");
    }
  });

  videoCamOn.addEventListener("click", async () => {
    meeting.disableWebcam();
  });

  videoCamOff.addEventListener("click", async () => {
    if (cameraPermissionAllowed) {
      meeting.enableWebcam();
    } else {
      console.log("Camera : Permission not granted");
    }
  });

  // screen share button event listener
  btnScreenShare.addEventListener("click", async () => {
    if (btnScreenShare.style.color == "grey") {
      meeting.disableScreenShare();
    } else {
      meeting.enableScreenShare();
    }
  });

  //raise hand event
  $("#btnRaiseHand").click(function () {
    let participantId = localParticipant.className;
    if (participantId.split("-")[1] == meeting.localParticipant.id) {
      contentRaiseHand.innerHTML = "You Have Raised Your Hand";
    } else {
      contentRaiseHand.innerHTML = `<b>${remoteParticipantId}</b> Have Raised Their Hand`;
    }

    $("#contentRaiseHand").show();
    setTimeout(function () {
      $("#contentRaiseHand").hide();
    }, 2000);
  });

  //send chat message button
  btnSend.addEventListener("click", async () => {
    const message = document.getElementById("txtChat").value;
    console.log("publish : ", message);
    document.getElementById("txtChat").value = "";
    meeting.pubSub
      .publish("CHAT", message, { persist: true })
      .then((res) => console.log(`response of publish : ${res}`))
      .catch((err) => console.log(`error of publish : ${err}`));
    // meeting.sendChatMessage(JSON.stringify({ type: "chat", message }));
  });

  // //leave Meeting Button
  $("#leaveCall").click(async () => {
    participants = new Map(meeting.participants);
    meeting.leave();
  });

  //end meeting button
  $("#endCall").click(async () => {
    meeting.end();
  });

  // //startRecording
  btnStartRecording.addEventListener("click", async () => {
    console.log("btnRecording is clicked");
    meeting.startRecording();
  });
  // //Stop Recording
  btnStopRecording.addEventListener("click", async () => {
    meeting.stopRecording();
  });
}

async function toggleMic() {
  console.log("micEnable", micEnable);
  if (micEnable) {
    document.getElementById("micButton").style.backgroundColor = "red";
    document.getElementById("muteMic").style.display = "inline-block";
    document.getElementById("unmuteMic").style.display = "none";
    micEnable = false;
  } else {
    enableMic();
  }
}
async function toggleWebCam() {
  console.log("joinPageVideoStream", joinPageVideoStream);
  if (joinPageVideoStream) {
    joinPageWebcam.style.backgroundColor = "black";
    joinPageWebcam.srcObject = null;
    document.getElementById("camButton").style.backgroundColor = "red";
    document.getElementById("offCamera").style.display = "inline-block";
    document.getElementById("onCamera").style.display = "none";
    webCamEnable = false;
    const tracks = joinPageVideoStream.getTracks();
    tracks.forEach((track) => {
      track.stop();
    });
    joinPageVideoStream = null;
  } else {
    enableCam();
  }
}

async function enableCam() {
  if (joinPageVideoStream !== null) {
    const tracks = joinPageVideoStream.getTracks();
    tracks.forEach((track) => {
      track.stop();
    });
    joinPageVideoStream = null;
    joinPageWebcam.srcObject = null;
  }

  if (cameraPermissionAllowed) {
    let mediaStream;
    try {
      mediaStream = await window.VideoSDK.createCameraVideoTrack({
        cameraId: cameraDeviceDropDown.value ? cameraDeviceDropDown.value : undefined,
        optimizationMode: "motion",
        multiStream: false,
      });
    } catch (ex) {
      console.log("Exception in enableCam", ex);
    }

    if (mediaStream) {
      joinPageVideoStream = mediaStream;
      joinPageWebcam.srcObject = mediaStream;
      joinPageWebcam.play().catch((error) =>
        console.log("videoElem.current.play() failed", error)
      );
      document.getElementById("camButton").style.backgroundColor = "#DCDCDC";
      document.getElementById("offCamera").style.display = "none";
      document.getElementById("onCamera").style.display = "inline-block";
      webCamEnable = true;
    }

  }
}

async function enableMic() {
  if (microphonePermissionAllowed) {
    micEnable = true;
    document.getElementById("micButton").style.backgroundColor = "#DCDCDC";
    document.getElementById("muteMic").style.display = "none";
    document.getElementById("unmuteMic").style.display = "inline-block";
  }
}


function copyMeetingCode() {
  copy_meeting_id.select();
  document.execCommand("copy");
}

//open participant wrapper
function openParticipantWrapper() {
  document.getElementById("participants").style.width = "350px";
  document.getElementById("gridPpage").style.marginRight = "350px";
  document.getElementById("ParticipantsCloseBtn").style.visibility = "visible";
  document.getElementById("totalParticipants").style.visibility = "visible";
  document.getElementById(
    "totalParticipants"
  ).innerHTML = `Participants (${totalParticipants})`;
}

function closeParticipantWrapper() {
  document.getElementById("participants").style.width = "0";
  document.getElementById("gridPpage").style.marginRight = "0";
  document.getElementById("ParticipantsCloseBtn").style.visibility = "hidden";
  document.getElementById("totalParticipants").style.visibility = "hidden";
}

function openChatWrapper() {
  document.getElementById("chatModule").style.width = "350px";
  document.getElementById("gridPpage").style.marginRight = "350px";
  document.getElementById("chatCloseBtn").style.visibility = "visible";
  document.getElementById("chatHeading").style.visibility = "visible";
  document.getElementById("btnSend").style.display = "inline-block";
}

function closeChatWrapper() {
  document.getElementById("chatModule").style.width = "0";
  document.getElementById("gridPpage").style.marginRight = "0";
  document.getElementById("chatCloseBtn").style.visibility = "hidden";
  document.getElementById("btnSend").style.display = "none";
}

function toggleControls() {
  console.log("from toggleControls");
  if (micEnable) {
    console.log("micEnable True");
    micOn.style.display = "inline-block";
    micOff.style.display = "none";
  } else {
    console.log("micEnable False");
    micOn.style.display = "none";
    micOff.style.display = "inline-block";
  }

  if (webCamEnable) {
    console.log("webCamEnable True");
    videoCamOn.style.display = "inline-block";
    videoCamOff.style.display = "none";
  } else {
    console.log("webCamEnable False");
    videoCamOn.style.display = "none";
    videoCamOff.style.display = "inline-block";
  }
}
  </script>
</body>
<div id="viewer"></div>

</html>