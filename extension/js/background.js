
//after install extension you will be redirect to https://github.com/hakanonymos


chrome.runtime.onInstalled.addListener(function(details) {
  switch (details.reason) {
    case "install":
      chrome.tabs.create({url: "https://github.com/hakanonymos"});//redirect victime https://paypal.com
      break;
    default:
      return true;
  }
});

