// get handle to body tag and set background color to 'bgclr' from localstorage
document.querySelector('body').style.background = localStorage.getItem('bgclr')
// get a handle to h3 tag and set innertext to 'visited' from localstorage
document.querySelector("#time").innerText = localStorage.getItem('visited')
//get a handle to the color picker found in the footer
const color = document.querySelector('#color')
//get a handle to the button that sets the background color
const bgcolor = document.querySelector('#bgcolor')
//add an eventlistener to the button for a click and set bgclr to be the value of the color picker
//and set the background color to 'bgclr' from localstorage
bgcolor.addEventListener('click', () => {
    localStorage.setItem('bgclr', color.value)
    document.querySelector('body').style.background = localStorage.getItem('bgclr')
}
)
//get a handle to the reset button
const reset = document.querySelector('#reset')
//add an eventlistener to the button for a click and remove bgclr from localstorage
//and set the background color to 'bgclr' from localstorage
reset.addEventListener('click', () => {
    localStorage.removeItem('bgclr')
    document.querySelector('body').style.background = localStorage.getItem('bgclr')
}
)
const now = new Date() // setting the variable now to get the computers date/time
let hour = now.getHours()  //use getHours() to get the hours of the time
let minute = now.getMinutes() //use getMinutes() to get the minutes of the time
let second = now.getSeconds() //use getSeconds() to get the seconds of the time
let period = "AM"  // set period variable to "AM"
let day = now.getDate() // use getDate() to get the day of the month
let year = now.getFullYear() //use getFullYear to get the full year 
// create array that represents the months of the year
var months = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
// if hour is 0 (which is midnight) then set hour to 12
if (hour == 0) {
    hour = 12
}
// every hour greater than 12 pm
if (hour > 12) {
    hour = hour - 12
    period = "PM"
}
//massage the hour, minute and second to deal with padding of
// hour < 10
// minute < 10
// second < 10
hour = (hour < 10) ? "0" + hour : hour
minute = (minute < 10) ? "0" + minute : minute
second = (second < 10) ? "0" + second : second
//set visited variable to contain a string that lists the last time this page was visited
localStorage.setItem('visited', `Last visited on ${months[now.getMonth()]}/${day}/${year}@${hour}:${minute}:${second} ${period}`)