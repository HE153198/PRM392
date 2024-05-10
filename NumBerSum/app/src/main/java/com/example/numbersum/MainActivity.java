package com.example.numbersum;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {
EditText number1, number2;
Button  btnCong;
TextView tvKetQua;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        number1 = findViewById(R.id.number1);
        number2 = findViewById(R.id.number2);
        btnCong = findViewById(R.id.btnCong);
        tvKetQua = findViewById(R.id.tvKetQua);

        btnCong.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int so1 = Integer.parseInt(number1.getText().toString());
                int so2 = Integer.parseInt(number2.getText().toString());
                int ketqua = so1 + so2;
                tvKetQua.setText("Tổng của 2 số : " + ketqua);


            }
        });

    }

}