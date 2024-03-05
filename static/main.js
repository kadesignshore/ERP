// const btnDropDown = document.querySelector("#btnDropDown");
// const divDropDown = document.querySelector("#divDropDown");

// btnDropDown.addEventListener('click', () => {    
//     divDropDown.classList.toggle("hidden");
// })

// divDropDown.addEventListener('mouseleave', () => {
//     divDropDown.classList.add("hidden");
// })


// document.querySelector('#userMenuButton').addEventListener('mouseover' ,() => {
//     if(document.getElementById('showMenu').classList.contains('hidden'))
//         document.getElementById('showMenu').classList.remove('hidden')
//     else
//         document.getElementById('showMenu').classList.add('hidden')
// })

const tabs = document.querySelectorAll('*[role="tab"]');
const tabPanels = document.querySelectorAll('*[role="tabpanel"]');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabPanels.forEach(panel => {
            if(!panel.classList.contains('hidden'))
            panel.classList.add('hidden')
        })
        tabs.forEach(tab => tab.classList.remove('bg-allports-600','underline','text-white'))
        tab.classList.add('bg-allports-600','underline','text-white')
        tab.classList.remove('hover:bg-gray-200','text-gray-600')
        const panel = document.querySelector(`#${tab.getAttribute('for')}`);
        panel.classList.remove('hidden')
    })
})


let currentYear = new Date().getFullYear();
let currentMonth = new Date().getMonth() + 1; // Months are zero-based

displayMonth(currentYear, currentMonth);

// Function to generate a dynamic calendar for a specific month and year
function generateCalendar(year, month) {
    const container = document.getElementById('calendar-container');
    container.innerHTML = '';

    const daysInMonth = new Date(year, month, 0).getDate();
    const firstDayOfMonth = new Date(year, month - 1, 1).getDay();
    
    const table = document.createElement('table');
    const headerRow = table.insertRow();

    // Creating header cells (days of the week)
    const daysOfWeek = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];
    for (let day of daysOfWeek) {
        const th = document.createElement('th');
        th.innerHTML = `<div class="w-full flex justify-center">
        <p class="text-lg text-center text-gray-800 dark:text-gray-100">${day}</p>
      </div>`
        headerRow.appendChild(th);
    }

    let date = new Date();
    let presentDay = `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}`
    
    // Filling in the calendar with days
    let dayCounter = 1;
    for (let i = 0; i < 6; i++) {
        const row = table.insertRow();
        for (let j = 0; j < 7; j++) {
            const cell = row.insertCell();
            // cell.innerHTML = '<div>';
            if (i === 0 && j < firstDayOfMonth) {
                // Empty cells before the first day of the month
                cell.innerHTML = '';
            } else if (dayCounter <= daysInMonth) {
                // Fill in the days of the month
                if(presentDay == `${year}-${month}-${dayCounter}`)
                cell.innerHTML = `<div class='p-2 md:p-4 lg:p-8 text-lg font-normal cursor-pointer flex w-full justify-center hover:bg-slate-100 bg-indigo-100' id='${year}-${month}-${dayCounter}'>` + dayCounter + "</div>";
                else
                cell.innerHTML = `<div class='p-2 md:p-4 lg:p-8 text-lg font-normal cursor-pointer flex w-full justify-center hover:bg-slate-100 ' id='${year}-${month}-${dayCounter}'>` + dayCounter + "</div>";
                cell.addEventListener('click', () => alert(`Clicked on ${year}-${month}-${dayCounter}`));
                dayCounter++;
            }
        }
    }

    container.appendChild(table);
}

// Function to display the current month and year
function displayMonth(year, month) {
    currentYear = year;
    currentMonth = month;
    document.getElementById('month-year-display').textContent = `${getMonthName(month)} ${year}`;
    generateCalendar(year, month);
}

// Function to navigate to the previous month
function previousMonth() {
    if (currentMonth === 1) {
        displayMonth(currentYear - 1, 12);
    } else {
        displayMonth(currentYear, currentMonth - 1);
    }
}

// Function to navigate to the next month
function nextMonth() {
    if (currentMonth === 12) {
        displayMonth(currentYear + 1, 1);
    } else {
        displayMonth(currentYear, currentMonth + 1);
    }
}

// Function to get the month name from its numerical representation
function getMonthName(month) {
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    return months[month - 1];
}

const customiztionSettingsEle = document.getElementById('customiztionSettings');
const customiztionSettingsCheckBoxes = customiztionSettingsEle.querySelectorAll('input[type="checkbox"]')
customiztionSettingsCheckBoxes.forEach(box => {
    box.addEventListener('change', () => {
        const id = box.getAttribute('for');
        const htmlEle = document.querySelector(id)
        console.log(htmlEle)
        if(htmlEle.classList.contains('hidden'))
            htmlEle.classList.remove('hidden')
        else
            htmlEle.classList.add('hidden')
    })
})