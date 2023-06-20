import sys
import pickle
import sklearn
import pandas as pd
bat=sys.argv[1]
bowl=sys.argv[2]
city=sys.argv[3]
target=sys.argv[4]
score=sys.argv[5]
over=sys.argv[6]
ball=sys.argv[7]
wicket=sys.argv[8]

tli=[
    "Sunrisers Hyderabad",
    "Mumbai Indians",
    "Royal Challengers Bangalore",
    "Kolkata Knight Riders",
    "Kings XI Punjab",
    "Chennai Super Kings",
    "Rajasthan Royals",
    "Delhi Capitals"
]
cili=['Hyderabad', 'Bangalore', 'Mumbai', 'Indore', 'Kolkata', 'Delhi',
       'Chandigarh', 'Jaipur', 'Chennai', 'Cape Town', 'Port Elizabeth',
       'Durban', 'Centurion', 'East London', 'Johannesburg', 'Kimberley',
       'Bloemfontein', 'Ahmedabad', 'Cuttack', 'Nagpur', 'Dharamsala',
       'Visakhapatnam', 'Pune', 'Raipur', 'Ranchi', 'Abu Dhabi',
       'Sharjah','Mohali', 'Bengaluru']
bat=int(bat)
bowl=int(bowl)
city=int(city)
rl=int(target)-int(score)
ov=int(over)
ba=int(ball)
ov=ov*6
bl=126-(ov+ba)
wl=10-int(wicket)
trx=int(score)
crr=(int(score)*6)/(120-bl)
rrr=(rl*6)/(bl)
pipe=pickle.load(open("C:/Users/DELL/Desktop/IPL Win probability predictor/pipe.pkl","rb"))
input_df=pd.DataFrame({
    'batting_team':[bat],
    'bowling_team':[bowl],
    'city':[city],
    'runs_left':[rl],
    'balls_left':[bl],
    'wickets':[wl],
    'total_runs_x':[trx],
    'crr':[crr],
    'rrr':[rrr],
    })
res=pipe.predict_proba(input_df)
print(tli[bowl],' : ',int(round(res[0][0]*100,0)),' %')
print("<BR>")
print(tli[bat],' : ',int(round(res[0][1]*100,0)),' %')
