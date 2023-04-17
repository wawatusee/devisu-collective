const playerVideo=document.getElementById('playervideo');
const sourceVideo=playerVideo.getElementsByTagName("source")[0];
/**
 * 
 * @param {string} filePath 
 */
function play_this_video(filePath){
    sourceVideo.src=filePath;
    console.log(sourceVideo.src);
    playerVideo.load();
}