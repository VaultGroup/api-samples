import time
from itsdangerous import JSONWebSignatureSerializer

apiKey = 'my_api_key'
secret = 'my_api_secret'

s = JSONWebSignatureSerializer(secret, algorithm_name='HS512')
payload = {"apiKey": apiKey, "timestamp": int(time.time())}
token = s.dumps(payload).decode()
