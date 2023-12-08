import config from '../config.json';
import GetEnvironment from './getEnvironment';


 function getContactUsUrl(){
    switch(GetEnvironment()){
        case "dev":
        return  config.MANUAL_URL.CONTACTUS;
        case "live":
        return  config.DIRECT_LIVE.CONTACTUS;
        case "test":
        return  config.DIRECT_TEST.CONTACTUS;
        }
}

function getCreateUserUrl(){
    switch(GetEnvironment()){
        case "dev":
        return  config.LOCALHOST_DEV.CreateUser;
        case "live":
        return  config.DIRECT_LIVE.CreateUser;
        case "test":
        return  config.DIRECT_TEST.CreateUser;
        }
    }

 function organiserRegisterEventUrl(){
    switch(GetEnvironment()){
        case "dev":
        return config.LOCALHOST_DEV.OrganiserRegisterEvent;
        case "live":
        return config.DIRECT_LIVE.OrganiserRegisterEvent;
        case "test":
        return config.DIRECT_TEST.OrganiserRegisterEvent;
        }

}
 function retrieveBookingsUrl(){
    switch(GetEnvironment()){
        case "dev":
        return config.LOCALHOST_DEV.RetrieveBookings;
        case "live":
        return config.DIRECT_LIVE.RetrieveBookings;
        case "test":
        return config.DIRECT_TEST.RetrieveBookings;
        }
    
}
 function retrieveEventsUrl(){
    switch(GetEnvironment()){
        case "dev":
        return config.MANUAL_URL.RetrieveEvents;
        case "live":
        return config.DIRECT_LIVE.RetrieveEvents;
        case "test":
        return config.DIRECT_TEST.RetrieveEvents;
        }
}

function userMakeBookingUrl(){
    switch(GetEnvironment()){
        case "dev":
        return config.MANUAL_URL.UserMakeBooking;
        case "live":
        return config.DIRECT_LIVE.UserMakeBooking;
        case "test":
        return config.DIRECT_TEST.UserMakeBooking;
        }
}


export default function GetUrl(targetUrl){
    switch(targetUrl){
        case "contactUs":
        return getContactUsUrl(); 

        case "createUser":
            return getCreateUserUrl(); 
    
        case "organiserRegisterEvent":
            return organiserRegisterEventUrl(); 

        case "retrieveBookings":
        return retrieveBookingsUrl(); 

        case "retrieveEvents":
            return retrieveEventsUrl(); 
        
        case "retrieveBookingshairstyle":
            return retrieveBookingsUrl(); 

        case "userMakeBooking":
            return userMakeBookingUrl();                 
        }    
}
