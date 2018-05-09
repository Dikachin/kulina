#include <bits/stdc++.h>

using namespace std;

int main(){
	int bilangan; cin>>bilangan;
	int manyNol = log10(bilangan);
	int nol = (int)(pow(10,manyNol));
	while(nol>0){
		int digit=bilangan/nol % 10;
		cout<<digit*nol<<endl;
		nol/=10;
	}
}
