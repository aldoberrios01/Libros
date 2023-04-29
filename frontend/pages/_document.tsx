import { SSRProvider } from "react-bootstrap";
import { Html, Head, Main, NextScript } from "next/document";

export default function Document() {
  return (
    <Html lang="es">
      <Head />
      <SSRProvider>
        <body>
          <Main />
          <NextScript />
        </body>
      </SSRProvider>
    </Html>
  );
}
