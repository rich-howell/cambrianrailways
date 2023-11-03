function processWidget() {
//     var debugging = false;
//     const widgetElems = document.getElementsByClassName("pretix-widget");

//     const wElem = widgetElems[0];
//     const eventHeader = wElem.getElementsByClassName("pretix-widget-event-header");
//     if (eventHeader.length > 0) {
//         const title = eventHeader[0].innerText;
//         if (debugging) {
//             console.log("Ticket View " + title);
//             alert("In ticket view - " + title);
//             console.debug(eventHeader);
//         }
//     }


//     //Get the div containing all events on the day
//     const populatedDates = wElem.getElementsByClassName("pretix-widget-has-events");
//     if (debugging) {
//         console.log("Populated Dates found on this screen:");
//         console.debug(populatedDates);
//     }


//     for (var i = 0; i < populatedDates.length; i++) {
//         const thisDate = populatedDates[i];

//         thisDate.classList.remove("pretix-widget-event-availability-red");
//         thisDate.classList.remove("pretix-widget-event-availability-green");
//         thisDate.classList.remove("pretix-widget-day-availability-red");
//         thisDate.classList.remove("pretix-widget-day-availability-green");
//         thisDate.classList.remove("pretix-mobile-timetable-steamdiesel");
//         thisDate.classList.remove("pretix-mobile-timetable-diesel");
//         thisDate.classList.remove("pretix-mobile-timetable-pacer");
//         thisDate.classList.remove("pretix-mobile-timetable-evening");
//         thisDate.classList.remove("pretix-mobile-special");

//         const tElems = thisDate.getElementsByClassName("pretix-widget-event-calendar-event");

//         var mobileColourSet = false;

//         for (var j = 0; j < tElems.length; j++) {
//             var tElem = tElems[j];

//             const title = tElem.getElementsByClassName("pretix-widget-event-calendar-event-name")[0];
//             const t = title.textContent;

//             if (debugging) {
//                 console.log("Calendar Element Found:::");
//                 console.debug(tElem);
//                 console.log("------- DETAILS -------");

//                 console.log("Processing a cell with the title text : " + t);
//                 console.debug(thisDate);
//                 console.log("Removing existing class lists...");
//             }


//             tElem.classList.remove("pretix-widget-day-availability-red");
//             tElem.classList.remove("pretix-widget-day-availability-green");
//             tElem.classList.remove("pretix-widget-event-availability-red");
//             tElem.classList.remove("pretix-widget-event-availability-green");


//             tElem.classList.remove("pretix-widget-event-availability-timetable-steamdiesel");
//             tElem.classList.remove("pretix-widget-event-availability-timetable-diesel");
//             tElem.classList.remove("pretix-widget-event-availability-timetable-pacer");
//             tElem.classList.remove("pretix-widget-event-availability-timetable-evening");
//             tElem.classList.remove("pretix-widget-event-availability-special");


//             if (t.startsWith("Regular Rail Service")) {
//                 tElem.classList.add("pretix-widget-event-availability-timetable-steamdiesel");
//                 if (!mobileColourSet) {
//                     thisDate.classList.add("pretix-mobile-timetable-steamdiesel");
//                     mobileColourSet = true;
//                 }
//             } else if (t.startsWith("Diesel")) {
//                 tElem.classList.add("pretix-widget-event-availability-timetable-diesel");
//                 if (!mobileColourSet) {
//                     thisDate.classList.add("pretix-mobile-timetable-diesel");
//                     mobileColourSet = true;
//                 }
//             } else if (t === "Wednesday Pacer Service") {
//                 tElem.classList.add("pretix-widget-event-availability-timetable-pacer");
//                 if (!mobileColourSet) {
//                     thisDate.classList.add("pretix-mobile-timetable-pacer");
//                     mobileColourSet = true;
//                 }
//             } else if (t === "Brewery Evening Service") {
//                 tElem.classList.add("pretix-widget-event-availability-timetable-evening");
//                 if (!mobileColourSet) {
//                     thisDate.classList.add("pretix-mobile-timetable-evening");
//                     mobileColourSet = true;
//                 }
//             } else if (t.endsWith("Special")) {
//                 tElem.classList.add("pretix-widget-event-availability-special");
//                 if (!mobileColourSet) {
//                     thisDate.classList.add("pretix-mobile-special");
//                     mobileColourSet = true;
//                 }
//             }

//             const availText = tElem.getElementsByClassName("pretix-widget-event-calendar-event-availability")[0];
//             if (availText.textContent === "Sale over") {
//                 thisDate.classList.add("pretix-widget-event-disabled");
//                 tElem.classList.add("pretix-widget-event-disabled");
//                 tElem.removeEventListener('click', (e) => {
//                     console.log(`Event is removed.`);
//                 });
//             } else {
//                 thisDate.classList.remove("pretix-widget-event-disabled");
//                 tElem.classList.remove("pretix-widget-event-disabled");
//             }
//             availText.style.display = 'none';
//         }

//     }
// }


// window.pretixWidgetCallback = function () {

//     /*
//        This function will reload the widget when going from the ticket purchase view
//        back to the calendar view. This is essential, as otherwise, the styling defaults back to the
//        basic Pretix colouring with green being available tickets, red being sold out.
//        There is no obvious way to override this, other than by modifying the original script
//        which we don't have access to as it's hosted within the Pretix instance.

//        Although it would be possible to change the script, that will mean the Pretix installation would
//        be non-standard. This approach will work with an unmodified Pretix installation.
//      */
//     window.addEventListener('click', function (event) {
//         const pElem = event.target.parentElement;
//         if (pElem.classList.contains("pretix-widget-back")) {
//             processWidget();
//         }
//     });

//     /*
//         This load listener is not necessary for most situations, however, if the widget is loaded in mobile view,
//         without this call to process the widget, the styles are not applied.
//      */
//     window.PretixWidget.addLoadListener(function () {
//         processWidget();
//     });
}


