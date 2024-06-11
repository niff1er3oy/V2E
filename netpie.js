
client = new Paho.MQTT.Client("mqtt.netpie.io", 443, "86acee0d-f675-4e1c-9155-437366f237fc");
var options = {
    useSSL: true,
    userName: "buT1cbyB2PqY939qQGRDNYXnDFuYKXBv",
    password: "fHLYdMHYEC5KQFiGkfQF1CdNiLyZ9FtF",
    onSuccess:onConnect,
    onFailure:doFail
}
client.connect(options);

    function onConnect() {
        client.subscribe("@msg/tst");
        mqttSend("@msg/tst", "GET");
    }

function doFail(e){
    console.log(e);
}

client.onMessageArrived = function(message) {
    if (message.payloadString == "LEDON" || message.payloadString == "LEDOFF") {
        $("#led-on").attr("disabled", (message.payloadString == "LEDON" ? true : false));
        $("#led-off").attr("disabled", (message.payloadString == "LEDOFF" ? true : false));
    }
}
var mqttSend = function(topic, msg) {
var message = new Paho.MQTT.Message(msg);
message.destinationName = topic;
client.send(message);
}