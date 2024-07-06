//đăng ký service worker
let swRegistration = navigator.serviceWorker.register('/service.js');
//sau khi đăng ký xong ta sẽ yêu cầu quyền để được đẩy thông báo
if (swRegistration) {
    let permission = window.Notification.requestPermission();
    if (permission !== 'granted') {
        throw new Error('Permission not granted for Notification');
    }
}
function urlBase64ToUint8Array(base64String) {
    var padding = '='.repeat((4 - base64String.length % 4) % 4);
    var base64 = (base64String + padding)
        .replace(/\-/g, '+')
        .replace(/_/g, '/');

    var rawData = window.atob(base64);
    var outputArray = new Uint8Array(rawData.length);

    for (var i = 0; i < rawData.length; ++i) {
        outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
}
// Sử dụng hàm urlBase64ToUint8Array
const vapidPublicKey = 'BFGTatH9PEyHs1-fG64SGSvSJRcvCSqn5AOYCuN9PPtqburCX8a88e8ctvI7NwIj0K7a9-kUTGdE5jMCYECBtwI';
const convertedVapidKey = urlBase64ToUint8Array(vapidPublicKey);

// Đăng ký Service Worker với VAPID key
navigator.serviceWorker.register('/service.js').then(registration => {
    return registration.pushManager.subscribe({
        userVisibleOnly: true,
        applicationServerKey: convertedVapidKey,
    });
}).then(subscription => {
    // Lưu thông tin đăng ký vào server
    console.log('Push subscription successful:', subscription);
}).catch(error => {
    console.error('Push subscription error:', error);
});
function subscribeUser() {
    navigator.serviceWorker.ready
        .then(registration => {
            const subscribeOptions = {
                userVisibleOnly: true,
                applicationServerKey: urlBase64ToUint8Array(window.appServerKey)
            };

            return registration.pushManager.subscribe(subscribeOptions);
        })
        .then(pushSubscription => {
            storePushSubscription(pushSubscription);
        });
}

function storePushSubscription(pushSubscription) {
    fetch('/subscriptions', {
        method: 'POST',
        body: JSON.stringify(pushSubscription),
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json'
        }
    }).then(res => {
        return res.json();
    });
}

subscribeUser();


