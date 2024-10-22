#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

void ex1 () {
	printf("Executando o exerc�cio 1...\n");
	printf("Ol� Mundo!");
}

void ex2 () {
	printf("Executando o exerc�cio 2...\n");
	setlocale(LC_ALL, "Portuguese");
	printf("Ol� Mundo!");
}

void ex3 () {
	printf("Executando o exerc�cio 3...\n");
	setlocale(LC_ALL, "Portuguese");
	printf("Rodrigo Santos");
}

void ex4 () {
	printf("Executando o exerc�cio 4...\n");
	setlocale(LC_ALL, "Portuguese");
	printf("Ol� Mundo!");
	
	system("pause");
}

void ex5 () {
	printf("Executando o exerc�cio 5...\n");
	setlocale(LC_ALL, "Portuguese");
	printf("\tOl� Mundo!\n");
	
	printf("Ol� \\ Mundo!\n");
}

void ex6 () {
	printf("Executando o exerc�cio 6...\n");
	setlocale(LC_ALL, "Portuguese");
	
	printf("------------------\n");
	printf("|                |\n");
	printf("| Rodrigo Santos |\n");
	printf("|                |\n");
	printf("------------------\n");
}

void ex7 () {
	printf("Executando o exerc�cio 7...\n");
	setlocale(LC_ALL, "Portuguese");
	
	printf("    *    \n");
	printf("   ***   \n");
	printf("  *****  \n");
	printf(" ******* \n");
	printf("   /|\\  \n");
}
void ex8 () {
	printf("Executando o exerc�cio 8...\n");
	setlocale(LC_ALL, "Portuguese");
	
	char letra;
	
	printf("Introduza um carater qualquer \n");
	scanf("%c",&letra);
	
	printf("\n");
	printf("O carater introduzido foi %c \n",letra);
	
	system("pause");
}

void ex9 () {
	printf("Executando o exerc�cio 9...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int a;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	
	printf("\n");
	printf("O valor inserido foi %d \n",a);
	
	system("pause");
}

void ex10 () {
	printf("Executando o exerc�cio 10...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int a,b;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	
	printf("Introduza um valor \n");
	scanf("%d",&b);
	
	printf("\n");
	printf("A soma dos dois valores � %d \n",a+b);
	
	system("pause");
}

void ex11 () {
	printf("Executando o exerc�cio 11...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int a,b;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	
	printf("Introduza um valor \n");
	scanf("%d",&b);
	
	printf("\n");
	printf("A soma dos dois valores � %d \n",a+b);
	printf("A subtra��o dos dois valores � %d \n",a-b);
	printf("A multiplica��o dos dois valores � %d \n",a*b);
	printf("A divis�o dos dois valores � %.2f \n",a/(float)b);
	
	system("pause");
}

void ex12 () {
	printf("Executando o exerc�cio 12...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int a,b;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	
	printf("Introduza um valor \n");
	scanf("%d",&b);
	
	printf("\n");
	printf("O dobro do primeiro valor � %d \n",a*2);
	printf("O quadrada do segundo valor � %d \n",b*b);
	
	system("pause");
}

void ex13 () {
	printf("Executando o exerc�cio 13...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int a,b,c;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	printf("Introduza um valor \n");
	scanf("%d",&b);
	printf("Introduza um valor \n");
	scanf("%d",&c);
	
	printf("\n");
	printf("A m�dia dos tr�s valores � %.2f \n",(a+b+c)/(float)3);
	
	system("pause");
}

void ex14 () {
	printf("Executando o exerc�cio 14...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int a,b,c;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	printf("Introduza um valor \n");
	scanf("%d",&b);
	printf("Introduza um valor \n");
	scanf("%d",&c);
	
	printf("\n");
	printf("A m�dia dos tr�s valores � %.2f \n",a*0.4+b*0.4+c*0.2);
	
	system("pause");
}

void ex15 () {
	printf("Executando o exerc�cio 15...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int c,l;
	
	printf("Introduza o comprimento de um ret�ngulo \n");
	scanf("%d",&c);
	printf("Introduza a largura de um ret�ngulo \n");
	scanf("%d",&l);
	
	printf("\n");
	printf("A �rea do ret�ngulo � %.2f \n",c*(float)l);
	
	system("pause");
}

void ex16 () {
	printf("Executando o exerc�cio 16...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int B,b,h;
	
	printf("Introduza a base do trap�zio \n");
	scanf("%d",&B);
	printf("Introduza outra base do trap�zio \n");
	scanf("%d",&b);
	printf("Introduza a altura do trap�zio \n");
	scanf("%d",&h);
	
	printf("\n");
	printf("A �rea do trap�zio � %.2f \n",((B+b)*h)/(float)2);
	
	system("pause");
}

void ex17 () {
	printf("Executando o exerc�cio 17...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int b,h;
	
	printf("Introduza a base do tri�ngulo \n");
	scanf("%d",&b);
	printf("Introduza a altura do tri�ngulo \n");
	scanf("%d",&h);
	
	printf("\n");
	printf("A �rea do tri�ngulo � %.2f \n",b*h/(float)2);
	
	system("pause");
}

void ex18 () {
	printf("Executando o exerc�cio 18...\n");
	setlocale(LC_ALL, "Portuguese");
	
	float trab,teste,med;
	
	printf("Introduza a nota do trabalho \n");
	scanf("%f",&trab);
	printf("Introduza a nota do teste \n");
	scanf("%f",&teste);
	
	med=(teste+trab)/(float)2;
	
	printf("\n");
	if (med>=9.5)
		printf("A m�dia � %.2f e o aluno est� aprovado \n", med);
	else
		printf("A m�dia � %.2f e o aluno est� reprovado \n", med);
	
	system("pause");
}

void ex19 () {
	printf("Executando o exerc�cio 19...\n");
	setlocale(LC_ALL, "Portuguese");
	
	float trab,teste,med;
	
	printf("Introduza a nota do trabalho \n");
	scanf("%f",&trab);
	printf("Introduza a nota do teste \n");
	scanf("%f",&teste);
	
	med=teste*0.4+trab*0.6;
	
	printf("\n");
	if (med>=9.5)
		printf("A m�dia � %.2f e o aluno est� aprovado \n", med);
	else
		printf("A m�dia � %.2f e o aluno est� reprovado \n", med);
	
	system("pause");
}

void ex20 () {
	printf("Executando o exerc�cio 20...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int valor;
	
	printf("Introduza um valor \n");
	scanf("%d",&valor);
	
	printf("\n");
	if (valor==0)
		printf("O valor � %d \n",valor);
	if (valor<0)
		printf("O valor � %d ent�o � negativo \n",valor);
	if (valor>0)
		printf("O valor � %d ent�o � positivo \n",valor);

	system("pause");
}

void ex21 () {
	printf("Executando o exerc�cio 21...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int valor;
	
	printf("Introduza um valor \n");
	scanf("%d",&valor);
	
	printf("\n");
	if (valor==0)
		printf("O valor � %d \n",valor);
	else if (valor<0)
		printf("O valor � %d ent�o � negativo \n",valor);
	else
		printf("O valor � %d ent�o � positivo \n",valor);

	system("pause");
}

void ex22 () {
	printf("Executando o exerc�cio 22...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int t1,t2,t3,max,min,AT;
	
	printf("Introduza tr�s valores \n");
	scanf("%d" "%d" "%d",&t1,&t2,&t3);
	
	printf("\n");
	
	if (t1>t2&&t1>t3)
		max=t1;
	if (t2>t1&&t2>t3)
		max=t3;
	if (t3>t1&&t3>t2)
		max=t3;
	if (t1<t2&&t1<t3)
		min=t1;
	if (t2<t1&&t2<t3)
		min=t2;
	if (t3<t2&&t3<t1)
		min=t3;
	
	AT=max-min;

	printf("A amplitude t�rmica � %d \n",AT);
	
	system("pause");
}

void ex23 () {
	printf("Executando o exerc�cio 23...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int num;
	
	printf("Introduza um valor \n");
	scanf("%d",&num);
	
	printf("\n");
	
	if (num % 2==0)
		printf("O valor � par");
	else 
		printf("O valor � �mpar");
	
	printf("\n");	
	system("pause");
}

void ex24 () {
	printf("Executando o exerc�cio 24...\n");
	setlocale(LC_ALL, "Portuguese");
	
	int num,min;
	
	printf("Introduza um valor em segundos \n");
	scanf("%d",&num);
	
	min=num/(float)60;
	
	int resto;	
	resto=num%60;
		
	printf("minutos = %d e segundo = %d \n",min,resto);
	
	printf("\n");	
	system("pause");
}

main()
{
	setlocale(LC_ALL, "Portuguese");
	int exer;
	
	do {
		printf("menu \n");
		printf("1, ex1 \n");
		printf("2, ex2 \n");
		printf("3, ex3 \n");
		printf("4, ex4 \n");
		printf("5, ex5 \n");
		printf("6, ex6 \n");
		printf("7, ex7 \n");
		printf("8, ex8 \n");
		printf("9, ex9 \n");
		printf("10, ex10 \n");
		printf("11, ex11 \n");
		printf("12, ex12 \n");
		printf("13, ex13 \n");
		printf("14, ex14 \n");
		printf("15, ex15 \n");
		printf("16, ex16 \n");
		printf("17, ex17 \n");
		printf("18, ex18 \n");
		printf("19, ex19 \n");
		printf("20, ex20 \n");
		printf("21, ex21 \n");
		printf("22, ex22 \n");
		printf("23, ex23 \n");
		printf("24, ex24 \n");
		printf("0, sair \n");
		scanf("%d", &exer);
		
		switch (exer)
		{
			case 0:
				printf("Saindo...\n");
				break;
				
			case 1:
				ex1();
				break;
				
			case 2:
				ex2();
				break;
				
			case 3:
				ex3();
				break;
				
			case 4:
				ex4();
				break;
				
			case 5:
				ex5();
				break;
				
			case 6:
				ex6();
				break;
				
			case 7:
				ex7();
				break;
				
			case 8:
				ex8();
				break;
				
			case 9:
				ex9();
				break;
				
			case 10:
				ex10();
				break;
				
			case 11:
				ex11();
				break;
				
			case 12:
				ex12();
				break;
				
			case 13:
				ex13();
				break;
				
			case 14:
				ex14();
				break;
				
			case 15:
				ex15();
				break;
			
			case 16:
				ex16();
				break;
				
			case 17:
				ex17();
				break;
				
			case 18:
				ex18();
				break;
				
			case 19:
				ex19();
				break;
				
			case 20:
				ex20();
				break;
				
			case 21:
				ex21();
				break;
				
			case 22:
				ex22();
				break;
				
			case 23:
				ex23();
				break;
				
			case 24:
				ex24();
				break;
			
			default:
				printf("Op��o inv�lida. \n");
				break;
		}
		
		printf("\n");
		
	}while (exer!=0);

	return 0;
}
