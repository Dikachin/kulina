#include <bits/stdc++.h>

using namespace std;

int main(){
	int N = 1000000;
	long long fibo[N+1];
	fibo[1]=fibo[2]=1;
	for (int i=3; i<=N; i++){
		fibo[i]=fibo[i-1]+fibo[i-2];
	}
	int K;
	while(cin>>K){
		cout<<fibo[K]<<endl;
	}
}