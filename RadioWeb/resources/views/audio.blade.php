
<video id="local-video" autoplay></video>
<video id="remote-video" autoplay></video>
<button id="start-stream">Start Streaming</button>
<button id="stop-stream">Stop Streaming</button>


<script>
const localVideo = document.getElementById('local-video');
const remoteVideo = document.getElementById('remote-video');
const startStreamBtn = document.getElementById('start-stream');
const stopStreamBtn = document.getElementById('stop-stream');

let localStream;
let peerConnection;

// Get user media and display local video stream
navigator.mediaDevices.getUserMedia({ audio: true })
  .then(stream => {
    localStream = stream;
    localVideo.srcObject = stream;
  })
  .catch(error => {
    console.error('Error accessing user media:', error);
  });

// Start streaming button click event
startStreamBtn.addEventListener('click', () => {
  // Create peer connection
  peerConnection = new RTCPeerConnection();

  // Add local stream to peer connection
  localStream.getTracks().forEach(track => {
    peerConnection.addTrack(track, localStream);
  });

  // Handle remote stream received
  peerConnection.ontrack = event => {
    remoteVideo.srcObject = event.streams[0];
  };

  // Create offer and set local description
  peerConnection.createOffer()
    .then(offer => {
      return peerConnection.setLocalDescription(offer);
    })
    .then(() => {
      // Send offer to signaling server
      const offerData = {
        type: 'offer',
        sdp: peerConnection.localDescription.sdp
      };
      // Send offerData to the signaling server using WebSocket or HTTP request
    })
    .catch(error => {
      console.error('Error creating offer:', error);
    });
});

// Stop streaming button click event
stopStreamBtn.addEventListener('click', () => {
  // Close peer connection
  peerConnection.close();

  // Stop local stream tracks
  localStream.getTracks().forEach(track => {
    track.stop();
  });

  // Reset video sources
  localVideo.srcObject = null;
  remoteVideo.srcObject = null;
});
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wahidulla</h1>
</body>
</html>