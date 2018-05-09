#include <bits/stdc++.h>

using namespace std;
//input : 1.345.679
int main(){
	string str; cin>>str;
	int l = str.length();
	string zero="";
	stack<string> ans;
	for (int i=l-1; i>=0; i--){
		if (str[i]=='.') continue;
		ans.push(str[i]+zero);
		zero+='0';
	}
	while(!ans.empty()){
		cout<<ans.top()<<endl;
		ans.pop();
	}
}