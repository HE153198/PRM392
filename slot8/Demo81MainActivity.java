<?xml version="1.0" encoding="utf-8"?><androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android&quot;
xmlns:app="http://schemas.android.com/apk/res-auto&quot;
xmlns:tools="http://schemas.android.com/tools&quot;
android:layout_width="match_parent"
android:layout_height="match_parent"
tools:context=".slot8.Demo81MainActivity">
<GridLayout
android:layout_width="match_parent"
android:layout_height="match_parent">
<TextView android:text="Email Setup"
android:layout_column="1"
android:layout_row="0"
android:textSize="50dp"/>
<TextView
android:text="You can config email in just a few steps:"
android:layout_row="1"
android:layout_column="0"
android:layout_columnSpan="2"/>
<TextView
android:textSize="20dp"
android:text="Email"
android:layout_column="0"
android:layout_row="2"/>
<TextView
android:textSize="20dp"
android:text="Pass"
android:layout_column="0"
android:layout_row="3"/>
<EditText
android:hint="input email"
android:layout_row="2"
android:layout_column="1"
android:layout_width="200dp"/>
<EditText
android:inputType="textPassword"
android:hint="input pass"
android:layout_row="3"
android:layout_column="1"
android:layout_width="200dp"/>
</GridLayout>
</androidx.constraintlayout.widget.ConstraintLayout>