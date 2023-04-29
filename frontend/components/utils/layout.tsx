import type { ReactNode } from "react";
import { Container } from "react-bootstrap";

interface Props {
  children: ReactNode;
}

export default function Layout({ children }: Props) {
  return (
    <>
      <header>Hello</header>
      <Container fluid>{children}</Container>
      <footer>Footer</footer>
    </>
  );
}
