import numpy as np
from pickle import load
from sklearn.ensemble import RandomForestRegressor
import numpy as np
import pandas as pd
import seaborn as sns

rf_model = load(open('rf_model2.pkl', 'rb'))

def Process(Input):
    X=np.zeros(83)
    X[0]=Input[0]
    X[1]=Input[1]
    X[2]=Input[2]
    countries=['Argentina', 'Australia', 'Austria', 'Bahrain', 'Belgium', 'Bermuda', 'Brazil', 'Canada', 'Cayman Islands', 'Channel Island', 'Chile', 'China', 'Colombia', 'Czech Republic', 'Denmark', 'Egypt', 'Finland', 'France', 'Germany', 
             'Greece', 'Hong Kong', 'Hungary', 'India', 'Indonesia', 'Ireland', 'Israel', 'Italy', 'Japan', 'Jordan', 'Kazakhstan', 'Kuwait', 'Lebanon', 'Liberia', 'Luxembourg', 'Malaysia', 'Mauritius', 'Mexico', 'Mongolia', 'Morocco', 
             'Netherlands', 'New Zealand', 'Nigeria', 'Norway', 'Oman', 'Pakistan', 'Panama', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Russia', 'Saudi Arabia', 'Singapore', 'South Africa', 'South Korea', 'Spain', 
             'Sweden', 'Switzerland', 'Taiwan', 'Thailand', 'Togo', 'Turkey', 'United Arab Emirates', 'United Kingdom', 'United States', 'Venezuela', 'Vietnam']
    sectors=["Consumer Discretionary","Consumer Staples","Energy","Finacials","Health Care",
             "Industrials","IT","Materials","Telecommunication","Utilities","Unknown"]
    for i in range (0,68):
        if Input[3]==countries[i]:
            X[3+i]=1
    if(Input[4]*0==0):
        for i in range (0,10):
            if Input[4]==i:
                X[72+i]=1
    else:
        for i in range (0,10):
            if Input[4]==sectors[i]:
                X[72+i]=1
    return X
        
def Predict(Input):
    z=[Process(Input),np.zeros(83)]
    pred = (rf_model.predict(z)[0])
    return pred
#print(Process([7,14,13,'Australia',1]))
#z=[Process([7,14,13,'Australia',1]),np.zeros(83)]
#print(rf_model.predict(z)[0])
#print(rf_model.predict(np.zeros(83)))
