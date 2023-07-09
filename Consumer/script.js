function talk(){
    var know = {
    "Who are you?" : "Hello, Lex here ",
    "How are you" : "Good :)",
    "What can i do for you" : "Please Give us A Follow & Like.",
    "Your followers" : "I have my family of 5000 members, i don't have follower ,have supportive Famiy ",
    "ok" : "Thank You So Much ",
    "Bye" : "Okay! Will meet soon..",
    "What types of fruits and vegetables do you sell?" : "We offer a wide variety of fresh fruits and vegetables, including apples, bananas, oranges, tomatoes, carrots, broccoli, and more. You can browse our selection on our website and place an order online.",
    "Do you offer organic produce?" : "Yes, we have a selection of organic fruits and vegetables available. You can filter your search results by organic produce on our website.",
    "What's your return policy?" : "Contact us within 24 hours for issues or refunds.",
    "Delivery or pickup options?" : "We offer both delivery and pickup options.",
    "How do you ensure quality?" : "We work with local farmers and inspect each item before delivery.",
    "Do you have seasonal produce?" : "Yes, we have seasonal fruits and vegetables available depending on the time of year.",
    "Can I place an order for same-day delivery?" : "Yes, same-day delivery is available in select areas. Please check our website for availability.",
    "Do you offer any discounts or promotions?" : "Yes, we often have discounts and promotions available. Please check our website or sign up for our newsletter to stay updated.",
    "Are your prices competitive with other stores?" : "Yes, we strive to offer competitive prices for our high-quality produce."
    };
    var user = document.getElementById('userBox').value;
    document.getElementById('chatLog').innerHTML = user + "<br>";
    if (user in know) {
    document.getElementById('chatLog').innerHTML = know[user] + "<br>";
    }else{
    document.getElementById('chatLog').innerHTML = "Sorry,I didn't understand <br>";
    }
    }