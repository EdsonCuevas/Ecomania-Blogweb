// Remove protocol from URL
function removeHttp(url) {
    return url.replace(/^https?:\/\//, '');
}

// Validate URL/Domain/IP
function isValidUrl(urlString) {
    var urlPattern = new RegExp(
        '^(https?:\\/\\/)?' + // validate protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // validate domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // validate OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // validate port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // validate query string
        '(\\#[-a-z\\d_]*)?$', 'i' // validate fragment locator
    ); 
    return !!urlPattern.test(urlString);
}

// Scan website
function scanWebsite(url) {
    const overlayElement = document.querySelector('.overlay'); 
    const quoteElement = document.querySelector('.quote');
    const statusElement = document.querySelector('.status');
    const closeButton = document.querySelector('#closeModal');
    const quotes = [
        "Between 2015 and 2019, the average desktop page transfer size grew by 677KB, which is a jump of over 50%.",
        "Currently, the IT industry is responsible for approximately 7% of the world's total electricity consumption.",
        "By 2025, it's projected that the communications sector could account for 20% of the global electricity usage.",
        "Global data centers consumed ~450 terawatt hours of electricity in 2022.",
        "Anticipated climate shifts are predicted to lead to an extra 250,000 deaths annually from 2030 to 2050.",
        "In 2022, only 14.21% of the world's primary energy generation came from renewable sources.",
        "By 2025, communication tech's carbon emissions will surpass all countries except China, India, and the U.S."
    ];

    // Get random quote
    let randomQuote = Math.floor(Math.random() * quotes.length);
    
    // Prepare AJAX called
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "functions/co2_scan.php?url=" + url, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Print quote
    overlayElement.classList.add('active');
    quoteElement.innerHTML = '"' + quotes[randomQuote] + '"';
    setInterval(function () {
        randomQuote = Math.floor(Math.random() * quotes.length);
        quoteElement.innerHTML = '"' + quotes[randomQuote] + '"';
    },10000);
    
    // Print status
    statusElement.innerHTML = "We're scanning your website.<br>Your result will be ready momentarily... ⌛"
    setTimeout(function () {
            statusElement.innerHTML = "Almost there! 💪"
    }, 20000);
    setTimeout(function () {
            statusElement.innerHTML = "Any minute now... I hope 🤞"
    }, 35000);
    setTimeout(function () {
            statusElement.innerHTML = "Hmm... <br>It's taking longer than normal 🤔 <br>Please wait..."
    }, 45000);
    setTimeout(function () {
            statusElement.innerHTML = "Okay, this is awkward, let me try something else 🤔 <br>One moment..."
    }, 60000);
    setTimeout(function () {
            statusElement.innerHTML = "Nope... <br>How about this then ⌛"
    }, 80000);

    // Abort the scan and reset the page        
    closeButton.addEventListener('click', function () {
        xhttp.abort();
        window.location.href = "https://co2.observer";
    });

    // Perform AJAX call
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            window.location.href = "/site/?url="+removeHttp(url);
        } else {
            console.log('An error occurred, please try again.');
        }
    };
    xhttp.send();

}


// Submit for scan
function submitScan() {
    const websiteInput = document.querySelector('.websiteInput');
    const errorContainer = document.querySelector('#errorContainer');
    if (isValidUrl(websiteInput.value) === true) {
        scanWebsite(websiteInput.value);
    } else {
        errorContainer.classList.add('active');
        errorContainer.ariaHidden = "false";
    }
}

// Count scanned websites
function countWebsites() {
    var xhttp = new XMLHttpRequest();
    const currentNumber =  document.querySelector('.nbr-val');
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == XMLHttpRequest.DONE) {
            if (xhttp.status == 200) {
                const websitesReload = new CountUp("nbr", currentNumber.value, xhttp.responseText, 0, 1.5, options);
                websitesReload.start();
                currentNumber.value = xhttp.responseText;
            }
            else if (xhttp.status == 400) {
                console.log('There was an error 400');
            }
            else {
                console.log('something else other than 200 was returned');
            }
        }
    };
    xhttp.open("GET", "functions/co2_get_website_count.php", true);
    xhttp.send();
}
