import type { GetServerSideProps } from "next";
import Head from "next/head";
import { useEffect } from "react";
import { Button } from "react-bootstrap";

export const getServerSideProps: GetServerSideProps = async () => {
  const books = await fetch(`${process.env.NEXT_PUBLIC_SITE_URL}/api/hello`);
  const data = await books.json();
  return {
    props: { data },
  };
};

export default function Home({ data }: any) {

  return (
    <>
      <Head>
        <title>Create Next App</title>
        <meta name="description" content="Generated by create next app" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <main>
        <Button>Hello</Button>
      </main>
    </>
  );
}
