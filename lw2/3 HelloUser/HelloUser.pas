PROGRAM HelloUser(INPUT, OUTPUT);
{�뢥�� ᮮ�饭�� 'Hello dear, <name>!',
 � ��砥 ������⢨� ��ࠬ��� name, �뢥�� 'Hello Anonymous!'}
USES
  DOS;
VAR
  QueryString: STRING;
BEGIN {HelloUser}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  {����஢���� QUERY_STRING � QueryString}
  QueryString := GetEnv('QUERY_STRING');
  IF POS('name=', QueryString) = 1
  THEN
    BEGIN
      IF POS('&', QueryString) <> 0
      THEN
        QueryString := COPY(QueryString, 6, POS('&', QueryString) - 6)
      ELSE
        QueryString := COPY(QueryString, 6, 255);
      WRITELN('Hello dear, ', QueryString)
    END
  ELSE
    WRITELN('Hello Anonymous!')
END. {HelloUser}