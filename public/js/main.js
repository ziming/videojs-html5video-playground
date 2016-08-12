var video = videojs('my-video', {
        // this 2nd argument after 'my-video' is the same as data-setup attribute at the video tag on welcome.blade.php file.
        
        playbackRates: [.5, 1, 1.5, 2, 2.5], // doesn't persist when you leave the page by default, need do something.
        fluid: true, // responsive sizing when u resize your browser
        plugins: {
            hotkeys: {
                seekStep: 10, //when hit left or right button, skip 10 seconds
                enableNumbers: false // if true, 9 means skip to 90% length of video, 8 is 80%...
            }
        }
});

// Kinda like jQuery ready()
/*
video.ready(function() {

    // you can declare plugin settings here too if you want.
    // this.hotkeys({
    //     seekStep: 10, //when hit left or right button, skip 10 seconds
    //     enableNumbers: false // if true, 9 means skip to 90% length of video, 8 is 80%...
    // });
    // var speed = prompt('Set Video speed to?');

    // this.playbackRate(speed);

    setTimeout(() => {
        this.play();
    }, 3000);
});
*/

video.on('ended', function() {
    $.ajax({
        type: 'post',
        url: '/completions',
        data: { videoId: 1}
    });
});

// video.on('pause', function() {
//     alert('Video Paused! ' + this.remainingTime() + ' seconds left to watch!');
// });