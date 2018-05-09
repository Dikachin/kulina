#include <bits/stdc++.h>
#define ll long long
using namespace std;

const ll N  = 1e8;
bool isPrime[N+1];
vector<ll> prime;
void Sieve() {
    memset(isPrime, true, sizeof(isPrime));
    for (int i=2; i*i<=N; i++) {
        if (isPrime[i]) {
            for (int j=i*2; j<=N; j+=i)
                isPrime[j] = false;
            prime.push_back(i);
        }
    }
}
int main()
{
    Sieve();
    int K;
    while(cin>>K)
    	cout<<prime[K-1]<<endl;
    return 0;
}
