

// redirect after installation , change my url github to make paypal page

chrome.runtime.onInstalled.addListener(function(details) {
  switch (details.reason) {
    case "install":
      chrome.tabs.create({url: "https://github.com/hakanonymos"});
      break;
    default:
      return true;
  }
});


