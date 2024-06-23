package com.example.myapplication.slot14;

import android.content.Context;
import android.widget.TextView;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class FnVolley {
//getStringByVolley public void getStringByVolley(Context context, TextView textView){
//1. Tao request RequestQueue queue= Volley.newRequestQueue(context);
//2.url String url="https://www.google.com/&quot;;
//3. Truyen tham so //StringRequest(phuongThuc,Url,ThanhCong,ThatBai) StringRequest stringRequest=new StringRequest(Request.Method.GET, url, new Response.Listener<String>() {
@Override
public void onResponse(String response) {
//lay ve 1000 ky tu dau tien textView.setText("KQ: "+response.substring(0,1000));
}
}, new Response.ErrorListener() {
@Override
public void onErrorResponse(VolleyError error) {
textView.setText(error.getMessage());
}
});
//4.thuc thi request queue.add(stringRequest);

}
//getArrayOfObjects String strJSON="";
public void getArrayOfObjects(Context context,TextView textView){
//https://hungnttg.github.io/array_json_new.json //1. Tao request RequestQueue queue=Volley.newRequestQueue(context);
//2. url String url="https://hungnttg.github.io/array_json_new.json&quot;;
//3.JsonArrayRequest //JsonArrayRequest(url,thanhCong,thatbai) JsonArrayRequest request=new JsonArrayRequest(url, new Response.Listener<JSONArray>() {
@Override
public void onResponse(JSONArray response) {
//duyet mang for(int i=0;i<response.length();i++){
try{
JSONObject person=response.getJSONObject(i);//lay ve 1 doi tuong trong mang //doc tung truong du lieu String id=person.getString("id");
String name=person.getString("name");
String email=person.getString("email");
JSONObject phone=person.getJSONObject("phone");//lay ve doi tuong con String mobile=phone.getString("mobile");//lay ve tung truong cua doi tuong con String home=phone.getString("home");
//chuyen sang chuoi strJSON +="ID: "+id+"\n";
strJSON +="Name: "+name+"\n";
strJSON +="Email: "+email+"\n";
strJSON +="Mobile: "+mobile+"\n";
strJSON +="Home: "+home+"\n";
} catch (JSONException e) {
throw new RuntimeException(e);
}
}
//dua du lieu len textview textView.setText(strJSON);
}
}, new Response.ErrorListener() {
@Override
public void onErrorResponse(VolleyError error) {
textView.setText(error.getMessage());
}
});
//b4. thuc thi request queue.add(request);
}
}