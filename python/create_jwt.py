import time
import jwt

apiKey = 'my_api_key'
secret = 'my_api_secret'

payload = {"apiKey": apiKey, "timestamp": int(time.time())}
token = jwt.encode(payload, secret, algorithm="HS512")
