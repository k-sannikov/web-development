PROGRAM HelloUser(INPUT, OUTPUT);
{Вывести сообщение 'Hello dear, <name>!',
 в случае отсутствия параметра name, вывести 'Hello Anonymous!'}
USES
  DOS;
VAR
  QueryString: STRING;
BEGIN {HelloUser}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  {Копирование QUERY_STRING в QueryString}
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